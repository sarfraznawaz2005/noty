[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

# Laravel Noty

Laravel package to incorporate beautiful noty notifications into laravel as flash messages.

*Tested with version 3.2.0 of [noty](https://github.com/needim/noty).*

## Screenshot

![Main Window](https://github.com/sarfraznawaz2005/noty/blob/master/screen.jpg?raw=true)

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

---

Publish package's config file by running below command:

```bash
$ php artisan vendor:publish --provider="Sarfraznawaz2005\Noty\NotyServiceProvider"
```
It should publish `config/noty.php` config file.

## Setup Noty

Before using this package, make sure you include [noty](https://github.com/needim/noty) library into your project either by using npm/yarn/etc or directly including its css and js files:

```html
<head>    
    <link rel="stylesheet" href="/noty.css"/>
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
public function store()
{
    noty('Success Message', 'success');

    return redirect()->back();
}
```

Following are types of notifications you can send:

```php
noty('Your Message'); // default (info)
noty('Your Message', 'success');
noty('Your Message', 'error');
noty('Your Message', 'warning');
noty('Your Message', 'alert');
```

With `$options`, you can also override `noty` config values for individual notifications example:

```php
noty('My Notification', null, ['layout' => 'top', 'timeout' => 5000]);
```

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
[link-contributors]: https://github.com/sarfraznawaz2005/noty/graphs/contributors
