<?php
    // Ini untuk Model
    require_once __DIR__ . '/../../Models/Auth/RegisterModel.php';
    
    class LoginController {
        private string $view;
        private $RegisterModel;

        public function __construct() {
            $this->view = __DIR__ . '/../../Views/';
            $this->RegisterModel = new RegisterModel();
        }

        public function Index() {
            $model = [
                'title' => "RentGo - Login",
                'notification' => [
                    'alert' => $_SESSION['alert'] ?? null,
                    'success' => $_SESSION['success'] ?? null,
                ],
            ];
        
            require_once $this->view . 'auth/login.php';
            require_once $this->view . 'notification/notification.php';
            
            unset($_SESSION['alert'], $_SESSION['success']);
        }

        public function LoginUser() {
            $data = $this->RegisterModel->readUser();

            if (isset($_POST['loginUser'])) {
                $identifier = $_POST['identifier'];
                $password = $_POST['password'];

                $userFound = false;
                foreach ($data as $user) {
                    $verify = password_verify($password, $user['password']);

                    if (($user['username'] === $identifier || $user['email'] === $identifier) && $verify) {
                        $_SESSION['username'] = $user['username'];
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['photo'] = $user['photo'];
                        $_SESSION['role'] = $user['role'];
                        $_SESSION['found'] = true;
                        $userFound = true;
                        break;
                    }
                }
            
                if ($userFound) {
                    switch ($_SESSION['role']) {
                        case 'admin':
                            $_SESSION['success'] = "Selamat Datang " . $_SESSION['username'] . " di halaman admin";
                            header("Location: " . BASE_URL . "admin/dashboard");
                        break;
                        case 'member':
                            $_SESSION['success'] = "Selamat Datang " . $_SESSION['username'] . "di halaman member";
                            header("Location: " . BASE_URL . "register");
                        break;
                        default:
                            $_SESSION['alert'] = "Role not recognized.";
                            header("Location: " . BASE_URL . "login");
                        break;
                    }
                } else {
                    $_SESSION['alert'] = "Invalid username / email or password.";
                    header("Location: " . BASE_URL . "login");
                    exit;
                }
            }
        }
    }
?>