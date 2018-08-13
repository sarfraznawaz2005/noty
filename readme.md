[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

# Laravel Noty

Laravel package to incorporate beautiful noty notifications into laravel as flash messages.

*Tested with version 3.2.0 of [noty](https://github.com/needim/noty).*

## Screenshot

![Main Window](https://raw.github.com/sarfraznawaz2005/noty/master/screen.png)

## Requirements

 - PHP >= 5.6
 - Laravel 5
 - [noty](https://github.com/needim/noty)

## Installation

Via Composer

``` bash
$ composer require sarfraznawaz2005/noty
```

For Laravel < 5.5:

Add Service Provider to `config/app.php` in `providers` section
```php
Sarfraznawaz2005\Noty\NotyServiceProvider::class,
```
Publish package's config file by running below command:

```bash
$ php artisan vendor:publish --provider="Sarfraznawaz2005\Noty\NotyServiceProvider"
```
It should publish `noty.php` file under `config` folder.

## Setup Noty

Before using this package, make sure you include [noty](https://github.com/needim/noty) library into your project either by using npm/yarn/etc or directly including its css and js files:

```html
<head>    
    <link rel="stylesheet" href="/noty.css"></script>
    <script type="text/javascript" src="/noty.js"></script>
</head>
```
and then add this in your view/layout file:

```php
@include('noty::view')
```

## Usage

Syntax:
```php
noty($message, $type = '', array $options = [])
```

In your controllers, you can now do:

```php
noty('Default Notification'); // default
noty('Alert Notification', 'alert');
noty('Warning Notification', 'info');
noty('Success Notification', 'success');
noty('Error Notification', 'error');
noty('Warning Notification', 'warning');
```

With `$options`, you can also override `noty` config values for individual notifications example:

```php
noty('Alert Notification', null, ['layout' => 'top');
```

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [Sarfraz Ahmed][link-author]
- [All Contributors][link-contributors]

## License

Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/sarfraznawaz2005/noty.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/sarfraznawaz2005/noty.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/sarfraznawaz2005/noty
[link-downloads]: https://packagist.org/packages/sarfraznawaz2005/noty
[link-author]: https://github.com/sarfraznawaz2005
[link-contributors]: ../../contributors]