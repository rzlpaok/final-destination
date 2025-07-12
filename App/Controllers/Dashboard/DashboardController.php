<?php
class DashboardController
{

    private string $view;

    public function __construct()
    {
        $this->view = __DIR__ . '/../../Views/';
    }

    public function Index()
    {
        $model = [
            'title' => "RentGO - Admin Dashboard",
            'photo' => $_SESSION['photo'],
            'username' => $_SESSION['username'],
            'email' => $_SESSION['email'],
            'notification' => [
                'alert' => $_SESSION['alert'] ?? null,
                'success' => $_SESSION['success'] ?? null,
            ],
        ];

        require_once $this->view . 'dashboard/layout/header.php';
        require_once $this->view . 'dashboard/admin/dashboardHome.php';
        require_once $this->view . 'dashboard/layout/footer.php';
        require_once $this->view . 'notification/notification.php';

        unset($_SESSION['alert'], $_SESSION['success']);
    }

































}








































?>