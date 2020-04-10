<?php

namespace Tests;

use ChurakovMike\FormTypeCast\TypeCastTrait;
use \PHPUnit\Framework\TestCase;

class TraitTest extends TestCase
{
    public function test_success_cast_type_setting()
    {
        $mock = $this->getMockForTrait(TypeCastTrait::class);
        $mock->setCasts([]);
        $this->assertIsArray($mock->getCasts());
    }
}
