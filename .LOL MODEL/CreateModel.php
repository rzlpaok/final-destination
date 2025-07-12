<?php
    session_start();
    

    $dataJson = __DIR__ . "/../../database/console.json";

    $data = file_exists($dataJson) ? json_decode(file_get_contents($dataJson), true) : [];
    if (json_last_error() !== JSON_ERROR_NONE) {
        die("JSON decode error: " . json_last_error_msg());
    }


    if (isset($_POST['addConsole'])) {
        $i = 0;
        if (!empty($data)) {
            $lastItem = end($data);
            $i = $lastItem['id'];
        }

        $nameConsole = trim($_POST['nameConsole'] ?? '');

        if ($nameConsole === '') {
            $_SESSION['alert'] = "Nama console tidak boleh kosong.";
            header("Location: /dashboard/console");
            exit;
        }

        foreach ($data as $item) {
            if (strtolower($nameConsole) === strtolower($item['nameConsole'])) {
                $_SESSION['alert'] = "Console sudah ada.";
                header("Location: /dashboard/console");
                exit;
            }
        }

        $data[] = [
            'id' => $i + 1,
            'nameConsole' => $nameConsole,
        ];

        if (!file_put_contents($dataJson, json_encode($data, JSON_PRETTY_PRINT))) {
            $_SESSION['alert'] = "Gagal menyimpan data.";
            header("Location: /dashboard/console");
            exit;
        }

        $_SESSION['success'] = "Console berhasil ditambahkan.";
        header("Location: /dashboard/console");
        exit;
    }
?>