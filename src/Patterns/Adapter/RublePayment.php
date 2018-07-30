<?php


namespace Learning\Patterns\Adapter;


class RublePayment implements RubleInterface
{
    use Common;

    /**
     * @return Int
     */
    public function payInRoubles(): Int
    {
        return $this->amount;
    }
}
