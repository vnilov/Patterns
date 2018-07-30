<?php


namespace Learning\Patterns\Adapter;


class AdapterEuro2Rubles implements RubleInterface
{
    private $euroObj;
    private $multiplier = 2.0;

    /**
     * AdapterEuro2Rubles constructor.
     *
     * @param EuroInterface $euro
     */
    public function __construct(EuroInterface $euro)
    {
        $this->euroObj = $euro;
    }

    /**
     * Set euro amount to payInRoubles and get the rubles result
     *
     * @return Int
     */
    public function payInRoubles(): Int
    {
        return $this->euroObj->getAmount() * $this->multiplier;
    }
}
