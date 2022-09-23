# Logging Actions

## Installation

You can install the package via composer:

```bash
composer require AjayJoshi/polymorphic-history

php artisan vendor:publish --provider="AjayJoshi\PolymorphicHistory\PolymorphicHistoryServiceProvider"

```

## Usage

## Use Trait in Model 

```php

use AjayJoshi\PolymorphicHistory\Traits\ModelHistoryTrait;


class PurchaseOrder extends Model
{
    use HasFactory;
   
    use ModelHistoryTrait;

```


## Extend Actions 

```php

use AjayJoshi\PolymorphicHistory\Enums\ModelHistoryEnum;

class HistoryActions extends ModelHistoryEnum {
   
   //PO
   const PURCHASE_ORDER_CREATED = 100;
   const PURCHASE_ORDER_UPDATED = 101;
   const PURCHASE_ORDER_DELETED = 102;
   const PURCHASE_ORDER_EXTENDED = 105;

   const PURCHASE_ORDER_PENDING = 106;
   const PURCHASE_ORDER_ACCEPTED = 107;
   const PURCHASE_ORDER_CANCELLED = 108;
   const PURCHASE_ORDER_REJECTED = 109;
   const PURCHASE_ORDER_PARTIAL_DELIVERED = 110;
   const PURCHASE_ORDER_DELIVERED = 111;
   
   const SCHEDULE_CREATED = 112;
   const SCHEDULE_UPDATED = 113;
   const SCHEDULE_DELETED = 114;
 
}
```

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
