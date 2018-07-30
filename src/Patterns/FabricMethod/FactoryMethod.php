<?php
namespace Learning\Patterns\FabricMethod;


class FactoryMethod extends AbstractFactoryMethod
{
    /**
     * @param string $carName
     * @return Car
     */
    protected static function createName(string $carName): Car
    {
        switch (strtolower($carName)) {
            case 'fiat':
                return new Fiat();
                break;
            case 'skoda':
                return new Skoda();
                break;
        }
    }
}
