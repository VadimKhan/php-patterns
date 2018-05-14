<?php

namespace VadimKhan\Patterns;

/**
 * Class MyClass
 * @package VadimKhan\Patterns
 */
class MyClass1
{
    protected $id;

    /**
     * MyClass1 constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}

/**
 * Class ObjectPool
 * @package VadimKhan\Patterns
 */
class ObjectPool
{
    protected $uniqId;
    protected static $objects = array();

    /**
     * ObjectPool constructor.
     */
    private function __construct()
    {
        $this->uniqId = uniqid();
    }

    /**
     * @param MyClass1 $object
     */
    public static function pushObject(MyClass1 $object)
    {
        self::$objects[$object->getId()] = $object;
    }

    /**
     * @param $id
     * @return mixed|null
     */
    public static function getObject($id)
    {
        return isset(self::$objects[$id]) ? self::$objects[$id] : null;
    }

    /**
     * @param $id
     */
    public static function removeObject($id)
    {
        if (array_key_exists($id, self::$objects)) {
            unset(self::$objects[$id]);
        }
    }

}