<?php


namespace Learning\Patterns\Strategy;


class News
{
    private $strategy;

    /**
     * News constructor.
     *
     * @param AbstractNewsStrategy $strategy
     */
    public function __construct(AbstractNewsStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     *
     */
    public function myPrint(): string
    {
        return $this->strategy->getTitle();
    }
}
