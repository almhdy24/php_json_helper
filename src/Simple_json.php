<?php
namespace App;

class Simple_json
{
    public $path;
    public $data;

    public function __construct($path) {
        $this->path = $path;
    }
    public function create() {

        if (!file_exists($this->path)) {
            fopen($this->path, 'a');
        } else {
            echo 'File already exists ';
        }

    }
    public function read() {

        if (file_exists($this->path)) {

            $json = file_get_contents($this->path);
            $this->data = json_decode($json, true);
        } else {
            die('Invalid Path');

        }

        return $this->data;
    }
    public function write($data) {

        if (file_exists($this->path)) {
            $json = file_get_contents($this->path);
            $array = json_decode($json, true);
            $array[] = $data;
            $this->data = json_encode($array, JSON_PRETTY_PRINT);
            file_put_contents($this->path, $this->data);
        } else {
            die('Invalid Path');
        }
        return true;

    }
}
