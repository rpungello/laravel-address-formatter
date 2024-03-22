# Laravel Address Formatter

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rpungello/laravel-address-formatter.svg?style=flat-square)](https://packagist.org/packages/rpungello/laravel-address-formatter)
[![GitHub Tests Action Status](https://github.com/rpungello/laravel-address-formatter/actions/workflows/run-tests.yml/badge.svg)](https://github.com/rpungello/laravel-address-formatter/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/rpungello/laravel-address-formatter.svg?style=flat-square)](https://packagist.org/packages/rpungello/laravel-address-formatter)

Address formatter for Laravel powered by commerceguys/addressing

## Installation

You can install the package via composer:

```bash
composer require rpungello/laravel-address-formatter
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-address-formatter-config"
```

This is the contents of the published config file:

```php
return [
    'default_origin_country' => 'US',
];
```

## Usage

```php
$address = new \CommerceGuys\Addressing\Address();
\Rpungello\LaravelAddressing\Facades\AddressFormatter::formatDefault($address);
\Rpungello\LaravelAddressing\Facades\AddressFormatter::formatPostal($address);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/rpungello/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Rob Pungello](https://github.com/rpungello)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
