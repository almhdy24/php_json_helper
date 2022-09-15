# JSON

[![Current version](https://img.shields.io/packagist/v/beste/json.svg?logo=composer)](https://packagist.org/packages/almhdy/json_helper)
[![Supported PHP version](https://img.shields.io/static/v1?logo=php&label=PHP&message=~7.4.0%20||%20~8.0.0%20||%20~8.1.0&color=777bb4)](https://packagist.org/packages/almhdy/json_helper)
[![Tests](https://github.com/beste/json/workflows/Tests/badge.svg)](https://github.com/almhdy24/php_json_helper/actions)
[![Discord](https://img.shields.io/discord/807679292573220925.svg?color=7289da&logo=discord)](https://discord.gg/Yacm7unBsr)
[![Sponsor](https://img.shields.io/static/v1?logo=GitHub&label=Sponsor&message=%E2%9D%A4&color=ff69b4)](https://github.com/sponsors/jeromegamez)

A simple lib to work with json file easier using php.
## Usage

```php
<?php
require_once("vendor/autoload.php");
use App\Simple_json;
//new object
$json = new Simple_json("./json/users.json");
// some dummy data
$data = [
     'id' => 1,
     "username" => "almhdy",
     "password" => sha1(1234)
    ];
    //create json file if not exists.
    $json->create();
    // write data to created file
    $json->write($data);
    //show file after write show data
var_dump($json->read());

```
// When something goes wring while decoding/encoding,
// an `UnexpectedValueException` is thrown
try {
    Json::decode('{]');
} catch (UnexpectedValueException $e) {
    // Handle error
}
```

## Installation

```shell
composer require almhdy/json_helper
```

## Running tests

```shell
composer run tests
```
