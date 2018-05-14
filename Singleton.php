<?php

namespace VadimKhan\Patterns;

/**
 * Class Singleton
 * @package VadimKhan\Patterns
 */
class Singleton
{
    /**
     * @var
     */
    protected $uniqId;
    protected static $_instance;

    /**
     * Singleton constructor.
     */
    private function __construct()
    {
        $this->uniqId = uniqid();
    }

    private function __clone()
    {
        return null;
    }

    private function __sleep()
    {
        return null;
    }

    private function __wakeup()
    {
        return null;
    }

    /**
     * @return Singleton
     */
    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}