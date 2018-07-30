<?php
namespace Learning\Patterns\FabricMethod;


abstract class AbstractFactoryMethod
{
    protected static $car;

    /**
     * @param string $carName
     * @return Car
     */
    abstract protected static function createName(string $carName): Car;

    /**
     * @param string $carName
     */
    public static function createCar(string $carName): void
    {
        $car = static::createName($carName);
        $car->paintBody();
        $car->addWheels();
        echo $car->getName() . ' is ready to go!' . "\n";
    }
}
