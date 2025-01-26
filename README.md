# Filament Partials

This package allows you to create partials for a resource in Filament, providing a structured approach to managing resource components.

## What is Partial?

**Partial** is a strategy to avoid inflating your resources. It involves having a separate trait for a resource's form and table, allowing for better code control, especially in large projects. By splitting these components, you can maintain a cleaner and more organized codebase, improving scalability and maintainability.

---

## Installation

You can install the package via Composer:

```bash
composer require andrefelipe18/filament-partials
```

You can publish the configuration file with:

```bash
php artisan vendor:publish --tag="filament-partials-config"
```

---

## Usage

To create partials for a specific resource, use the following command:

```bash
php artisan make:filament-partials PostResource --only=table,form
```

This will create partials for the **PostResource**, specifically for the `table` and `form` components.

---

## Testing

Run the following command to execute tests:

```bash
composer test
```

---

## Changelog

Please see the [CHANGELOG](CHANGELOG.md) for more details on recent updates and changes.

---

## Contributing

Contributions are welcome!

---

## Credits

- [André Domingues](https://github.com/andrefelipe18)
- [All Contributors](../../contributors)

---

## License

This project is licensed under the MIT License. For more information, please see the [License File](LICENSE.md).

