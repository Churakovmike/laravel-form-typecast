<?php

namespace Tests;

use ChurakovMike\FormTypeCast\TypeCastTrait;
use \PHPUnit\Framework\TestCase;

class TraitTest extends TestCase
{
    public function test_success_cast_type_setting()
    {
        $mock = $this->getMockTrait();
        $mock->setCasts([]);
        $this->assertIsArray($mock->getCasts());
        $this->assertEmpty($mock->getCasts());
    }

    public function test_success_check_casts()
    {
        $mock = $this->getMockTrait();
        $mock->setCasts([
            'test' => 'integer',
        ]);
        $this->assertIsArray($mock->getCasts());
        $this->assertArrayHasKey('test', $mock->getCasts());

    }

    public function test_check_has_casts_method()
    {
        $mock = $this->getMockTrait();
        $mock->setCasts([
            'test' => 'integer',
        ]);
        $this->assertTrue($mock->hasCast('test'));
    }

    protected function getMockTrait()
    {
        return $this->getMockForTrait(TypeCastTrait::class);
    }
}
