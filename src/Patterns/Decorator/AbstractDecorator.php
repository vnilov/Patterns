<?php
namespace Learning\Patterns\Decorator;


abstract class AbstractDecorator
{
    protected $animal;

    /**
     * @return mixed
     */
    abstract public function say();

    public function __construct(AbstractAnimal $animal)
    {
        $this->animal = $animal;
    }
}
