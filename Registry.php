<?php

namespace VadimKhan\Patterns;

/**
 * Class Registry
 * @package VadimKhan\Patterns
 */
class Registry
{
    protected $uniqId;
    protected static $data = array();

    /**
     * Registry constructor.
     */
    private function __construct()
    {
        $this->uniqId = uniqid();
    }

    /**
     * @param $key
     * @param $value
     */
    public static function set($key, $value)
    {
        self::$data[$key] = $value;
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public static function get($key)
    {
        return isset(self::$data[$key]) ? self::$data[$key] : null;
    }

    /**
     * @param $key
     */
    public static function remote($key)
    {
        if (array_key_exists($key, self::$data)) {
            unset(self::$data[$key]);
        }
    }

}