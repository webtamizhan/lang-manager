# This package helps to manage laravel translation without ease

[![Latest Version on Packagist](https://img.shields.io/packagist/v/webtamizhan/lang-manager.svg?style=flat-square)](https://packagist.org/packages/webtamizhan/lang-manager)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/webtamizhan/lang-manager/run-tests?label=tests)](https://github.com/webtamizhan/lang-manager/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/webtamizhan/lang-manager/Check%20&%20fix%20styling?label=code%20style)](https://github.com/webtamizhan/lang-manager/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/webtamizhan/lang-manager.svg?style=flat-square)](https://packagist.org/packages/webtamizhan/lang-manager)

---

## Installation

You can install the package via composer:

```bash
composer require webtamizhan/lang-manager
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="lang-manager_without_prefix-migrations"
php artisan migrate
```
 
## Usage

```php
$lang-manager = new Webtamizhan\LangManager();
echo $lang-manager->echoPhrase('Hello, Webtamizhan!');
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

- [Prabakaran T](https://github.com/webtamizhan)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
