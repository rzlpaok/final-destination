<?php

// --------- sudah ada fungsi read
$dataJson = __DIR__ . "/../../database/console.json";

$data = file_exists($dataJson) ? json_decode(file_get_contents($dataJson), true) : [];
if (json_last_error() !== JSON_ERROR_NONE) {
    die("JSON decode error: " . json_last_error_msg());
}
// --------------------------------

// -------- ini buat fungsi baru di controller
if (isset($_POST['updateConsole'])) {
    $idToUpdate = (int)($_POST['id'] ?? 0);
    $newName = trim($_POST['nameConsole'] ?? '');

    if ($idToUpdate === 0 || $newName === '') {
        $_SESSION['alert'] = "ID dan nama console harus diisi.";
        header("Location: /dashboard/console");
        exit;
    }

    // Cek duplikat nama (kecuali sendiri)
    foreach ($data as $item) {
        if ($item['id'] !== $idToUpdate && strtolower($item['nameConsole']) === strtolower($newName)) {
            $_SESSION['alert'] = "Nama console sudah dipakai.";
            header("Location: /dashboard/console");
            exit;
        }
    }
// -------------------------------------------------

// -------------------- ini fungsi update di model
    $found = false;
    foreach ($data as &$item) {
        if ($item['id'] === $idToUpdate) {
            $item['nameConsole'] = $newName;
            $found = true;
            break;
        }
    }
    unset($item);

    if (!$found) {
        $_SESSION['alert'] = "Console dengan ID tersebut tidak ditemukan.";
        header("Location: /dashboard/console");
        exit;
    }
    // ------------------------------------------------------

    // --------------- sudah ada fungsinya di model pokoknya write
    if (!file_put_contents($dataJson, json_encode($data, JSON_PRETTY_PRINT))) {
        $_SESSION['alert'] = "Gagal menyimpan perubahan.";
        header("Location: /dashboard/console");
        exit;
    }
    // ------------------------------------------------------

    $_SESSION['success'] = "Console berhasil diperbarui.";
    header("Location: /dashboard/console");
    exit;
    
    // -----------------------------------------------------------------
    
}
?>