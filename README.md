# JSON

[![Current version](https://img.shields.io/packagist/v/beste/json.svg?logo=composer)](https://packagist.org/packages/beste/json)
[![Supported PHP version](https://img.shields.io/static/v1?logo=php&label=PHP&message=~7.4.0%20||%20~8.0.0%20||%20~8.1.0&color=777bb4)](https://packagist.org/packages/beste/json)
[![Tests](https://github.com/beste/json/workflows/Tests/badge.svg)](https://github.com/beste/json/actions)
[![Discord](https://img.shields.io/discord/807679292573220925.svg?color=7289da&logo=discord)](https://discord.gg/Yacm7unBsr)
[![Sponsor](https://img.shields.io/static/v1?logo=GitHub&label=Sponsor&message=%E2%9D%A4&color=ff69b4)](https://github.com/sponsors/jeromegamez)

A simple helper to decode and encode JSON, including from files.

## Usage

```php
use App\Simpe_json

$object = Json::decode('{"key": "value"}');


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
