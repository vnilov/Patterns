<?php
namespace Learning\Patterns\Singleton;

class Singleton
{
    protected static $instance;

    protected function __construct() {}
    private function __clone() {}

    /**
     * @return static
     */
    public static function getInstance()
    {
        if (static::$instance === null) {
            return new static();
        }
        return static::$instance;
    }
}
