<?php


namespace Learning\Patterns\Strategy;


class UrgentNoticeStrategy extends AbstractNewsStrategy
{

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return 'Urgent Notice: ';
    }
}
