# Crud Generator

cloned from https://github.com/appzcoder/crud-generator

Package description: Please use the original package instead this one.
This package was clone for personal project.

## Installation

Install via composer
```bash
composer require mtpal/crud-generator
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
Mtpal\CrudGenerator\ServiceProvider::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
Mtpal\CrudGenerator\Facades\CrudGenerator::class,
```

## Usage

### CRUD Command

With admin directory just add admin middleware, guard etc ..... in the controllers or routes

```
php artisan crud:generate Posts --fields='title#string; content#text; category#select#options={"technology": "Technology", "tips": "Tips", "health": "Health"}' --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --validations='title#required'
```
```
php artisan migrate
```

Without any admin directory

```
php artisan crud:generate Items --fields='title#string; description#text' --form-helper=html --validations='title#required'
```

```
php artisan migrate
```

## Security

If you discover any security related issues, please email 
instead of using the issue tracker.

## Author 

[Sohel Amin](http://sohelamin.com) :email: [Email Me](mailto:sohelamincse@gmail.com)

## Credits

This package is bootstrapped with the help of
[melihovv/laravel-package-generator](https://github.com/melihovv/laravel-package-generator).
