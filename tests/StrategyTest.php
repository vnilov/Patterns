<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use \Learning\Patterns\Strategy\News;
use \Learning\Patterns\Strategy\OpinionStrategy;
use \Learning\Patterns\Strategy\UrgentNoticeStrategy;

class StrategyTest extends TestCase
{
    public function test()
    {
        $opinion = new News(new OpinionStrategy());
        $urgent = new News(new UrgentNoticeStrategy());

        $this->assertEquals('In my humble opinion... ', $opinion->myPrint());
        $this->assertEquals('Urgent Notice: ', $urgent->myPrint());
    }
}
