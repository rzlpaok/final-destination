<?php
$model = __DIR__ . '/../../Models/';
require_once $model . 'Dashboard/ConsoleModel.php';

class ConsoleController
{
    private string $view;

    private $ConsoleModel;

    public function __construct()
    {
        $this->view = __DIR__ . '/../../Views/';
        $this->ConsoleModel = new ConsoleModel();
    }

    public function Index()
    {
        $data = $this->ConsoleModel->ReadConsole();

        $model = [
            'title' => "RentGO - Admin Console",
            'photo' => $_SESSION['photo'],
            'username' => $_SESSION['username'],
            'email' => $_SESSION['email'],
            'items' => $data,
            'notification' => [
                'alert' => $_SESSION['alert'] ?? null,
                'success' => $_SESSION['success'] ?? null,
            ],
        ];

        require_once $this->view . 'dashboard/layout/header.php';
        require_once $this->view . 'dashboard/admin/console.php';
        require_once $this->view . 'dashboard/layout/footer.php';
        require_once $this->view . 'notification/notification.php';

        unset($_SESSION['alert'], $_SESSION['success']);
    }

    //Create Console
    public function CreateConsole()
    {
        $data = $this->ConsoleModel->ReadConsole();

        if (isset($_POST['addConsole'])) {
            $nameconsole = $_POST['nameConsole'] ?? '';

            if (empty($nameconsole)) {
                $_SESSION['alert'] = "All fields are required.";
                header("Location: " . BASE_URL . "admin/console");
                exit;
            }

            $status = false;
            foreach ($data as $item) {
                if ($nameconsole === $item['nameConsole']) {
                    $_SESSION['alert'] = "Console sudah terdaftar";
                    $status = true;
                    header("Location: " . BASE_URL . "admin/console");
                    break;
                }

            }
            $this->ConsoleModel->CreateConsole($status, $nameconsole);
        }
    }

    //Update Console
    public function UpdateConsole()
    {
        $data = $this->ConsoleModel->ReadConsole();

        if (isset($_POST['updateConsole'])) {
            $idToUpdate = $_POST['id'];
            $newName = trim($_POST['nameConsole'] ?? '');

            if ($idToUpdate === 0 || $newName === '') {
                $_SESSION['alert'] = "ID dan nama console harus diisi.";
                header("Location: /admin/console");
                exit;
            }

            // Cek duplikat nama (kecuali sendiri)
            $status = false;
            foreach ($data as $item) {
                if ($item['id'] !== $idToUpdate && strtolower($item['nameConsole']) === strtolower($newName)) {
                    $_SESSION['alert'] = "Nama console sudah dipakai.";
                    $status = true;
                    header("Location: /admin/console");
                    exit;
                }
            }

            // tambahkan fungsi ke model UpdateConsole
            $this->ConsoleModel->UpdateConsole($status, $idToUpdate, $newName);
        }
    }

    public function DeleteConsole()
    {
        $data = $this->ConsoleModel->ReadConsole();

        if (isset($_POST['deleteConsole'])) {
            $id = $_POST['id'];
        
            $status = false;
            foreach ($data as $item) {
                if ($item['id'] === $id) {
                    $_SESSION['alert'] = "ID Console tidak ada";
                    $status = true;
                    header("Location: /admin/console");
                    exit;
                }
            }

            $this->ConsoleModel->DeleteConsole($status, $id);
        }
    }
}
?>