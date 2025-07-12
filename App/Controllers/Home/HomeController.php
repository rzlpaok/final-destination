<?php
    $model = __DIR__ . '/../../Models/';

    class HomeController {
        private string $view;

        public function __construct() {
            $this->view = __DIR__ . '/../../Views/';
        }

        public function Index() {
            $model = [
                'title' => "RentGo - Register",
                'notification' => [
                    'alert' => $_SESSION['alert'] ?? null,
                    'success' => $_SESSION['success'] ?? null,
                ],
            ];
        
            require_once $this->view . 'users/layoutUser/headerUsers.php';
            require_once $this->view . 'users/HomePage.php';
            require_once $this->view . 'users/layoutUser/footerUsers.php';
            
            unset($_SESSION['alert'], $_SESSION['success']);
        }
    }
?>