<?php
namespace Learning\Patterns\Builder;


class PrahaCakeBuilder extends CakeBuilder
{
    /**
     * @return string
     */
    protected function makeBasement(): string
    {
        return 1;
    }

    /**
     * @return string
     */
    protected function addCream(): string
    {
        return 2;
    }

    /**
     * @return string
     */
    protected function addToppings(): string
    {
        return 3;
    }
}
