<?php


namespace Learning\Patterns\Adapter;


class EuroPayment implements EuroInterface
{
    use Common;

    /**
     * @return int
     */
    public function payInEuros(): int
    {
        return $this->amount;
    }

}
