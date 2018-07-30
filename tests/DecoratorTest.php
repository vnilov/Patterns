<?php

namespace Tests;

use Learning\Patterns\Decorator\AngryDecorator;
use Learning\Patterns\Decorator\CalmDecorator;
use Learning\Patterns\Decorator\CatAnimal;
use Learning\Patterns\Decorator\DogAnimal;

class DecoratorTest extends \PHPUnit\Framework\TestCase
{
    public function testDecorator()
    {
        $dog = new DogAnimal();
        echo $dog->say() . "\n";

        $cat = new CatAnimal();
        echo $cat->say() . "\n";

        $angryCat = new AngryDecorator($cat);
        echo $angryCat->say() . "\n";

        $calmDog = new CalmDecorator($dog);
        echo $calmDog->say() . "\n";

        $this->assertNotEquals($dog->say(), $calmDog->say());
        $this->assertNotEquals($cat->say(), $angryCat->say());

    }
}
