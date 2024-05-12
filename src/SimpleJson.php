<?php

namespace App;

class SimpleJson
{
    private string $path;
    private array $data = [];

    public function __construct(string $path)
    {
        $this->path = $path;
        $this->initializeData();
    }

    private function initializeData(): void
    {
        if (!file_exists($this->path)) {
            file_put_contents($this->path, '{}');
        }

        $json = file_get_contents($this->path);
        $this->data = json_decode($json, true) ?: [];
    }

    public function read(): array
    {
        return $this->data;
    }

    public function search(array $conditions): array
    {
        $results = array_filter($this->data, function($item) use ($conditions) {
            foreach ($conditions as $key => $value) {
                if ($item[$key] != $value) {
                    return false;
                }
            }
            return true;
        });

        return array_values($results);
    }

    public function update(array $conditions, array $updatedData): bool
    {
        $updated = false;

        foreach ($this->data as &$item) {
            $match = true;
            foreach ($conditions as $key => $value) {
                if ($item[$key] != $value) {
                    $match = false;
                    break;
                }
            }

            if ($match) {
                $item = array_merge($item, $updatedData);
                $updated = true;
            }
        }

        if ($updated) {
            $this->saveData();
        }

        return $updated;
    }

    public function delete(array $conditions): bool
    {
        $originalCount = count($this->data);

        $this->data = array_filter($this->data, function ($item) use ($conditions) {
            $match = true;
            foreach ($conditions as $key => $value) {
                if (!isset($item[$key]) || $item[$key] != $value) {
                    $match = false;
                    break;
                }
            }

            return !$match;
        });

        $deletedCount = $originalCount - count($this->data);

        if ($deletedCount > 0) {
            $this->saveData();
        }

        return $deletedCount > 0;
    }

    private function saveData(): void
    {
        $jsonData = json_encode($this->data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents($this->path, $jsonData);
    }
}