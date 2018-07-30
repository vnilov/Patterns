<?php
namespace Learning\Patterns\Decorator;


class CalmDecorator extends AbstractDecorator
{
    /**
     * @return mixed|string
     */
    public function say()
    {
        return $this->animal->say() . ' with calmness...';
    }
}
