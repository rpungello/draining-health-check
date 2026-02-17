# Laravel Health check to check whether connections are being drained

[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/rpungello/draining-health-check/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/rpungello/draining-health-check/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/rpungello/draining-health-check/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/rpungello/draining-health-check/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)

## Installation

You can install the package via composer:

```bash
composer require rpungello/draining-health-check
```

## Usage

Configure the health check to include this package:
```php
\Spatie\Health\Facades\Health::checks([
    // Other checks...,
    \Rpungello\DrainingHealthCheck\DrainingHealthCheck::new(),
]);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Rob Pungello](https://github.com/rpungello)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
