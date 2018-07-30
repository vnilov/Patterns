<?php


namespace Learning\Patterns\Builder;

abstract class CakeBuilder
{
    public function getCake(): int
    {
        return $this->createCake();
    }

    /**
     * Create cake method
     */
    protected function createCake(): int
    {
        return $this->makeBasement() + $this->addCream() + $this->addToppings();
    }

    abstract protected function makeBasement();

    abstract protected function addCream();

    abstract protected function addToppings();
}
