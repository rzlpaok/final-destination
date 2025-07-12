<?php
    $model = __DIR__ . '/../../Models/';
    require_once $model . 'Auth/RegisterModel.php';

    class RegisterController {
        private string $view;
        private $RegisterModel;

        
        public function __construct() {
            $this->view = __DIR__ . '/../../Views/';
            $this->RegisterModel = new RegisterModel();
        }

        public function Index() {
            $model = [
                'title' => "RentGo - Register",
                'notification' => [
                    'alert' => $_SESSION['alert'] ?? null,
                    'success' => $_SESSION['success'] ?? null,
                ],
            ];
        
            require_once $this->view . 'auth/register.php';
            require_once $this->view . 'notification/notification.php';
            
            unset($_SESSION['alert'], $_SESSION['success']);
        }
    
        public function CreateUser() {
            // Panggil Database User
            $data = $this->RegisterModel->ReadUser();
    
            if (isset($_POST['registerUser'])) {
                $username = $_POST['username'] ?? '';
                $email = $_POST['email'] ?? '';
                $password = $_POST['password'] ?? '';
                $photo = $_FILES['photo'] ?? null;
                
                // Semua Input Harus Terisi Semua
                if (empty($username) || empty($email) || empty($password)) {
                    $_SESSION['alert'] = "All fields are required.";
                    header("Location: " . BASE_URL . "register");
                    exit;
                }

                // Cek Email dan Username Duplikat
                $status = false;
                foreach ($data as $item) {
                    if ($email === $item['email']) {
                        $_SESSION['alert'] = "Email sudah terdaftar";
                        $status = true;
                        break;
                    } else if($username === $item['username']) {
                        $_SESSION['alert'] = "Username sudah terdaftar";
                        $status = true;
                    }
                }

                $foto = "";
                if (!$status) {
                    // Validate file upload
                    if (!empty($photo['name'])) {
                        if ($photo['error'] !== UPLOAD_ERR_OK) {
                            $_SESSION['alert'] = "File upload error: " . $photo['error'];
                            header("Location: " . BASE_URL . "register");
                            exit;
                        }
        
                        $ext = pathinfo($photo['name'], PATHINFO_EXTENSION);
                        $allowedExt = ['jpg', 'jpeg', 'png', 'gif'];
                        if (!in_array(strtolower($ext), $allowedExt)) {
                            $_SESSION['alert'] = "Invalid file type. Only JPG, JPEG, PNG, and GIF are allowed.";
                            header("Location: " . BASE_URL . "register");
                            exit;
                        }
        
                        $uploadDir = __DIR__ . "/../../../file-upload/";
                        if (!is_dir($uploadDir) && !mkdir($uploadDir, 0755, true)) {
                            $_SESSION['alert'] = "Failed to create upload directory.";
                            header("Location: " . BASE_URL . "register");
                            exit;
                        }
        
                        $foto = $username . "_" . rand(0, 999) . "." . $ext;
                        if (!move_uploaded_file($photo['tmp_name'], $uploadDir . $foto)) {
                            $_SESSION['alert'] = "Failed to move uploaded file.";
                            header("Location: " . BASE_URL . "register");
                            exit;
                        }
                    }
                }

                $this->RegisterModel->CreateUser($status, $foto, $username, $email, $password);
            }
        }
    }
?>