# JsonFormatter for Laravel Octane

[![Latest Version on Packagist](https://img.shields.io/packagist/v/keerill/laravel-json-formatter.svg?style=flat-square)](https://packagist.org/packages/keerill/laravel-json-formatter)
[![Total Downloads](https://img.shields.io/packagist/dt/keerill/laravel-json-formatter.svg?style=flat-square)](https://packagist.org/packages/keerill/laravel-json-formatter)

This package allows you to format JSON logs for Laravel Octane RoadRunner server.

## Installation

You can install the package via composer:

```bash
composer require keerill/laravel-json-formatter
```

You can publish and run the migrations with:

## Usage

### Environment

``` env
LOG_CHANNEL=stderr
LOG_STDERR_FORMATTER="\\Keerill\\LaravelJsonFormatter\\JsonFormatter"
```

### Config

``` php
// config/logging.php
return [
    'channels' => [
        'stderr' => [
            'driver' => 'monolog',
            'handler' => StreamHandler::class,
            'formatter' => Keerill\LaravelJsonFormatter\JsonFormatter::class,
            'with' => [
                'stream' => 'php://stderr',
            ],
        ],
    ],
]
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
