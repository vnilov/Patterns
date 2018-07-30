<?php

namespace Tests;


use Learning\Patterns\FabricMethod\FactoryMethod;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testFabric()
    {
        FactoryMethod::createCar('fiat');
        FactoryMethod::createCar('skoda');
        $this->assertTrue(true);
    }
}
