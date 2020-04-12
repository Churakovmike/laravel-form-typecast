## Laravel form typecasting

### Requirements
+ laravel 5.5+

## Getting started
### Install
The package is available on packagist.
```php
composer require churakovmike/laravel-form-typecast
```

### Usage
You just need to use this trait.

```php
<?php

namespace App\Http\Requests;

use ChurakovMike\FormTypeCast\TypeCastTrait;
use Illuminate\Foundation\Http\FormRequest;

class ExampleFormRequest extends FormRequest
{
    use TypeCastTrait;
    
    /**
    * @var array 
     */
    protected $casts = [
        'name' => 'string',
        'age' => 'int',
        'salary' => 'float',
    ];

}
```

This trait is a wrapper over HasAttributes.php trait.