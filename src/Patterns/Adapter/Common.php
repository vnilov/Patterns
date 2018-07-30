<?php


namespace Learning\Patterns\Adapter;


trait Common
{
    protected $amount;

    /**
     * Common constructor.
     *
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
}
