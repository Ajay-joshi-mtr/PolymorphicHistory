# Logging Actions

## Installation

You can install the package via composer:

```bash
composer require AjayJoshi/polymorphic-history

php artisan vendor:publish --provider="AjayJoshi\PolymorphicHistory\PolymorphicHistoryServiceProvider"

```

## Usage

```php

#use Faced or $model

\ModelAction::log($model,HistoryActions::PURCHASE_ORDER_EXTENDED,'test','remark');

#list morphmanyrelation objects

foreach($model->modelActivity as $acitivity)


```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email ajayjoshi.mtr@gmail.com instead of using the issue tracker.

## Credits

-   [Ajay Joshi](https://github.com/Ajay-Joshi-mtr)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
