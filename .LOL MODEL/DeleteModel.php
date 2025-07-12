<?php


// ================== ini fungsi readConsole() ====================//
$dataJson = __DIR__ . '/../../database/console.json';
$data = file_exists($dataJson) ? json_decode(file_get_contents($dataJson), true) : [];

if (json_last_error() !== JSON_ERROR_NONE) {
    $_SESSION['alert'] = "JSON decode error: " . json_last_error_msg();
    header("Location: /dashboard/console");
    exit;
}
// =============================================================== //

// ================== ini fungsi DeleteConsole() ====================//
if (isset($_POST['deleteConsole'])) {
    $id = $_POST['id'];

    $status = false;
    foreach ($data as $item) {
        if ($item['id'] !== $id) {
            $_SESSION['alert'] = "ID Console tidak ada";
            $status = true;
            header("Location: /dashboard/console");
            exit;
        }
    }

    // disini model fungsi DeleteConsole(bool $status, int $id)
    if (!$status) {
        $filteredData = array_filter($data, function ($item) use ($id) {
            return $item['id'] !== $id;
        });
        $filteredData = array_values($filteredData);
        
        if (file_put_contents($dataJson, json_encode($filteredData, JSON_PRETTY_PRINT))) {
            $_SESSION['success'] = "Console berhasil dihapus.";
        }
    } else {
        $_SESSION['alert'] = "Gagal menghapus console.";
        header("Location: /admin/console");
        exit;
    }
    // ----------------------------
    

}

// =============================================================== //
