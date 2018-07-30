<?php
namespace Learning\Patterns\Decorator;


class CatAnimal extends AbstractAnimal
{
    public function __construct()
    {
        $this->name = 'Cat';
    }

    /**
     * @return string
     */
    public function say(): string
    {
        return $this->name . 'says murrrrr';
    }
}
