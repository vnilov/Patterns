<?php
namespace Learning\Patterns\FabricMethod;


abstract class Car
{
    protected $name;

    /**
     *
     */
    public function addWheels(): void
    {
        echo 'Adding wheels' . "\n";
    }

    /**
     *
     */
    public function paintBody(): void
    {
        echo 'Painting body' . "\n";
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
