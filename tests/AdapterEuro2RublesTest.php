<?php

namespace Tests;

use Learning\Patterns\Adapter\AdapterEuro2Rubles;
use Learning\Patterns\Adapter\EuroPayment;
use PHPUnit\Framework\TestCase;

class AdapterEuro2RublesTest extends TestCase
{
    public function testPayInRoubles()
    {
        $eurosObj = new EuroPayment(60);
        $adapter = new AdapterEuro2Rubles($eurosObj);

        $rubles = $adapter->payInRoubles();

        $this->assertEquals(120, $rubles);
    }
}
