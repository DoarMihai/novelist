# A tiny blog package

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

````
composer require invataprogramare/novelist
````

#### Publishing the config

````
php artisan vendor:publish --provider="Invataprogramare\Novelist\NovelistServiceProvider" --tag="config"
````

#### Publishing the migrations

````
php artisan vendor:publish --provider="Invataprogramare\Novelist\NovelistServiceProvider" --tag="migrations"
````

#### Publishing the views

````
php artisan vendor:publish --provider="Invataprogramare\Novelist\NovelistServiceProvider" --tag="views"
````

#### Publishing the assets

````
php artisan vendor:publish --provider="Invataprogramare\Novelist\NovelistServiceProvider" --tag="assets"
````

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email mihai@invata-programare.ro instead of using the issue tracker.

## Credits

- [Stefanescu Mihai](https://github.com/invataprogramare)
- [All Contributors](../../contributors)

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
