<?php


namespace Learning\Patterns\Strategy;


class OpinionStrategy extends AbstractNewsStrategy
{

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return 'In my humble opinion... ';
    }
}
