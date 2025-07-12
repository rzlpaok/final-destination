<?php
session_start();

$dataJson = __DIR__ . '/../../database/console.json';

if (!isset($_POST['id'])) {
    $_SESSION['alert'] = "ID tidak ditemukan.";
    header("Location: /dashboard/console");
    exit;
}

$idToDelete = (int) $_POST['id'];

$data = file_exists($dataJson) ? json_decode(file_get_contents($dataJson), true) : [];

if (json_last_error() !== JSON_ERROR_NONE) {
    $_SESSION['alert'] = "JSON decode error: " . json_last_error_msg();
    header("Location: /dashboard/console");
    exit;
}

$filteredData = array_filter($data, function ($item) use ($idToDelete) {
    return $item['id'] !== $idToDelete;
});
$filteredData = array_values($filteredData);

if (file_put_contents($dataJson, json_encode($filteredData, JSON_PRETTY_PRINT))) {
    $_SESSION['success'] = "Console berhasil dihapus.";
} else {
    $_SESSION['alert'] = "Gagal menghapus console.";
}

header("Location: /dashboard/console");
exit;