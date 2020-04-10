<?php

namespace Tests;

use Illuminate\Foundation\Http\FormRequest;

class TestForm extends FormRequest
{
    protected $casts = [
        'name' => 'string',
        'age' => 'integer',
    ];
}
