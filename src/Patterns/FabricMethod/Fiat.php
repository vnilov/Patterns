<?php
namespace Learning\Patterns\FabricMethod;


class Fiat extends Car
{
    public function __construct()
    {
        $this->name = 'Fiat';
    }
}
