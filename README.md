# Monitor metrics of Laravel disks

[![Latest Version on Packagist](https://img.shields.io/packagist/v/curder/laravel-disk-monitor.svg?style=flat-square)](https://packagist.org/packages/curder/laravel-disk-monitor)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/curder/laravel-disk-monitor/run-tests?label=tests)](https://github.com/curder/laravel-disk-monitor/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/curder/laravel-disk-monitor/Check%20&%20fix%20styling?label=code%20style)](https://github.com/curder/laravel-disk-monitor/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/curder/laravel-disk-monitor.svg?style=flat-square)](https://packagist.org/packages/curder/laravel-disk-monitor)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require curder/laravel-disk-monitor
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Curder\DiskMonitor\DiskMonitorServiceProvider" --tag="laravel-disk-monitor-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Curder\DiskMonitor\DiskMonitorServiceProvider" --tag="laravel-disk-monitor-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-disk-monitor = new Curder\DiskMonitor();
echo $laravel-disk-monitor->echoPhrase('Hello, Curder!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [curder](https://github.com/curder)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
