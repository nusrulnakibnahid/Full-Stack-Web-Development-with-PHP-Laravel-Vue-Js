<?php
namespace App\Classes;

trait FileHandler {
    private $filePath = __DIR__ . '/../../data/vehicles.json';

    private function readFromFile() {
        if (!file_exists($this->filePath)) {
            return [];
        }
        $data = file_get_contents($this->filePath);
        return json_decode($data, true) ?? [];
    }

    private function writeToFile($data) {
        file_put_contents($this->filePath, json_encode($data, JSON_PRETTY_PRINT));
    }
}
