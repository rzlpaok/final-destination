<?php
    class RegisterModel {
        private string $dataPath;

        public function __construct() {
            $this->dataPath = __DIR__ . "/../../Databases/users.json";
        }

        public function readUser(): array {
            if (!file_exists($this->dataPath)) {
                return [];
            }

            $json = file_get_contents($this->dataPath);
            $data = json_decode($json, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception("JSON decode error: " . json_last_error_msg());
            }

            return $data;
        }

        public function writeUser(array $data): void {
            $json = json_encode($data, JSON_PRETTY_PRINT);

            if (!file_put_contents($this->dataPath, $json)) {
                $_SESSION['alert'] = "Failed to write to JSON file.";
                header("Location: " . BASE_URL . "register");
                exit;
            }
        }

        public function createUser(bool $status, string $foto, string $username, string $email, string $password): void {
            $data = $this->readUser();
            $lastId = !empty($data) ? end($data)['id'] : 0;

            if (!$status) {
                $data[] = [
                    'id'       => $lastId + 1,
                    'photo'    => $foto ? "file-upload/" . $foto : "",
                    'username' => $username,
                    'email'    => $email,
                    'password' => password_hash($password, PASSWORD_BCRYPT),
                    'role'     => 'member',
                ];

                $this->writeUser($data);

                $_SESSION['success'] = "Success create user.";
                header("Location: " . BASE_URL . "login");
            } else {
                header("Location: " . BASE_URL . "register");
            }
            exit;
        }
    }
?>