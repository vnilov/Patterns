<?php

namespace Tests;

use Error;
use Learning\Patterns\Singleton\Singleton;
use PHPUnit\Framework\TestCase;


class SingletonTest extends TestCase
{
    public function testSingleton()
    {
        $obj1 = Singleton::getInstance();
        $obj2 = Singleton::getInstance();

        $this->assertEquals($obj1, $obj2);
    }

    public function testCloneSingleton()
    {
        $this->expectException(Error::class);

        $obj1 = Singleton::getInstance();
        $obj2 = clone $obj1;
    }

    public function testInheritSingleton()
    {
        $obj1 = Singleton::getInstance();
        $obj2 = SingletonChild::getInstance();
        $this->assertNotEquals($obj1, $obj2);
    }
}

class SingletonChild extends Singleton
{

}
