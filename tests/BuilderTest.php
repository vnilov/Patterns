<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Learning\Patterns\Builder\PrahaCakeBuilder;

class BuilderTest extends TestCase
{
    public function testBuilder()
    {
        $builder = new PrahaCakeBuilder();
        $result = $builder->getCake();
        $this->assertEquals(6, $result);
    }
}
