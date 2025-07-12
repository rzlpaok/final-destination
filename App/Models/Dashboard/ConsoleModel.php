<?php
class ConsoleModel
{

    private string $dataPath;

    public function __construct()
    {
        $this->dataPath = __DIR__ . "/../../Databases/console.json";
    }

    public function readConsole(): array
    {
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

    public function writeConsole(array $data): void
    {
        $json = json_encode($data, JSON_PRETTY_PRINT);

        if (!file_put_contents($this->dataPath, $json)) {
            $_SESSION['alert'] = "Failed to write to JSON file.";
            header("Location: " . BASE_URL . "admin/console");
            exit;
        }
    }

    public function CreateConsole(bool $status, string $nameconsole)
    {
        $data = $this->readConsole();
        $lastId = !empty($data) ? end($data)['id'] : 0;

        if (!$status) {
            $data[] = [
                'id' => $lastId + 1,
                'nameConsole' => $nameconsole,
            ];

            $this->writeConsole($data);

            $_SESSION['success'] = "Success create console.";
            header("Location: " . BASE_URL . "admin/console");
            exit;
        }
    }

    public function UpdateConsole(bool $status, int $idToUpdate, string $newName)
    {
        $data = $this->readConsole();


        foreach ($data as &$item) {
            if ($item['id'] === $idToUpdate) {
                $item['nameConsole'] = $newName;
                $status = true;
                break;
            }
        }
        unset($item);

        if (!$status) {
            $_SESSION['alert'] = "Console dengan ID tersebut tidak ditemukan.";
            header("Location: /admin/console");
            exit;
        }

        $this->writeConsole($data);

        $_SESSION['success'] = "Console berhasil diperbarui.";
        header("Location: /admin/console");
        exit;
    }

    public function DeleteConsole(bool $status,int $id)
    {
        $data = $this->ReadConsole();

        if (!$status) {
            $filteredData = array_filter($data, function ($item) use ($id) {
                return $item['id'] !== $id;
            });
            $filteredData = array_values($filteredData);
            
            if (file_put_contents($this->dataPath, json_encode($filteredData, JSON_PRETTY_PRINT))) {
                $_SESSION['success'] = "Console berhasil dihapus.";
                header("Location: /admin/console");
                exit;
            }
        } else {
            $_SESSION['alert'] = "Gagal menghapus console.";
            header("Location: /admin/console");
            exit;
        }

    }
}

?>