<?php
namespace Learning\Patterns\Decorator;


class DogAnimal extends AbstractAnimal
{
    public function __construct()
    {
        $this->name = 'Dog';
    }

    /**
     * @return string
     */
    public function say(): string
    {
        return $this->name . 'says bark-bark';
    }
}
