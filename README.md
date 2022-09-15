# JSON

[![Current version](https://img.shields.io/packagist/v/beste/json.svg?logo=composer)](https://packagist.org/packages/almhdy/json_helper)
[![Supported PHP version](https://img.shields.io/static/v1?l
A simple lib to work with json file easier using php.
## Usage

```php
<?php

require_once("vendor/autoload.php");

use App\Simple_json;

//new object with file path

// json helper will create file if not found but can't create dir for it

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
When something goes wrong make sure that php can write and read in
In you server .
If the path is not valid it is throw error invalid path
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
