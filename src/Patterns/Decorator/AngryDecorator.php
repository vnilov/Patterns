<?php
namespace Learning\Patterns\Decorator;


class AngryDecorator extends AbstractDecorator
{
    /**
     * @return mixed|string
     */
    public function say()
    {
        return $this->animal->say() . ' with Angry!!!';
    }
}
