<?php
require_once("vendor/autoload.php");
use App\Simple_json;
$json = new Simple_json("./json/users.json");
//var_dump($json);
$data = [
    'id' => 1,
    "username" => "almhdy",
    "password" => sha1(1234)
];
$json->create();
$json->write($data);
var_dump($json->read());
