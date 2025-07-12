<?php

// Use absolute path for user.json
$dataJson = __DIR__ . "/../database/console.json";

// Initialize data array
$data = file_exists($dataJson) ? json_decode(file_get_contents($dataJson), true) : [];
if (json_last_error() !== JSON_ERROR_NONE) {
    die("JSON decode error: " . json_last_error_msg());
}

$items = [];
foreach ($data as $item) {
    $items['consoles'][] = [
        'id' => $item['id'],
        'nameConsole' => $item['nameConsole'],
    ];
}

if (isset($_POST['addConsole'])) {
    $i = 0;
    if (!empty($data)) {
        $lastItem = end($data);
        $i = $lastItem['id'];
    }

    $nameConsole = $_POST['nameConsole'] ?? '';


    $alert = "";
    $showAlert = false;
    foreach ($data as $item) {
        if ($nameConsole === $item['nameConsole']) {
            $alert = "Console Sudah Ada";
            $_SESSION['alert'] = $alert;
            $showAlert = true;
            break;
        }
    }

    if (!$showAlert) {
        $data[] = [
            'id' => $i + 1,
            'nameConsole' => $nameConsole,
        ];

        // Write to JSON file
        if (!file_put_contents($dataJson, json_encode($data, JSON_PRETTY_PRINT))) {
            $_SESSION['alert'] = "Failed to write to JSON file.";
            header("Location: http://localhost:8080/dashboard/console");
            exit;
        }

        $_SESSION['success'] = "Console Berhasil Ditambahkan";
        header("Location: http://localhost:8080/dashboard/console");
        exit;
    } else {
        header("Location: http://localhost:8080/dashboard/console");
        exit;
    }
}
?>