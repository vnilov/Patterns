<?php

namespace Learning\Patterns\Decorator;

abstract class AbstractAnimal
{
    protected $name;

    /**
     * @return mixed
     */
    abstract public function say();
}
