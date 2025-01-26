# Create partials of a resource

# TODO

## Installation

You can install the package via composer:

```bash
composer require andrefelipe18/filament-partials
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-partials-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-partials-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-partials-views"
```

## Usage

```php
$filamentPartials = new AndreFelipe\FilamentPartials();
echo $filamentPartials->echoPhrase('Hello, AndreFelipe!');
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

- [André Domingues](https://github.com/andrefelipe18)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
