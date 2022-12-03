<?php
namespace App;

class Simple_json
{
    public string $path;
    public  $data;

    public function __construct(string $path) {
        $this->path = $path;
    }
    public function create() {

        if (!file_exists($this->path)) {
            fopen($this->path, 'a');
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
    public function write(array $data) {

        if (file_exists($this->path)) {
            $json = file_get_contents($this->path);
            $array = json_decode($json, true);
            $array[] = $data;
            $this->data = json_encode($array, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
            $boolen = file_put_contents($this->path, $this->data);
            if ($boolen) {
                return true;
            } else {
                return false;
            }

        } else {
            die('Invalid Path');
        }


    }
}