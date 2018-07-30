<?php


namespace Learning\Patterns\Adapter;

/**
 * @method getAmount
 */
interface EuroInterface
{
    /**
     * @return Int
     */
    public function payInEuros(): Int;
}
