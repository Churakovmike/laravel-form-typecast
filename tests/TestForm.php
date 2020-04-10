<?php

namespace Tests;

use ChurakovMike\FormTypeCast\TypeCastTrait;
use Illuminate\Foundation\Http\FormRequest;

class TestForm extends FormRequest
{
    use TypeCastTrait;

    protected $casts = [
        'name' => 'string',
        'age' => 'integer',
    ];

    public function rules()
    {
        return [
            'name' => 'string',
            'age' => 'integer',
        ];
    }
}
