<?php


namespace App\Services\Singleton;



class Singleton
{
    //保存实例的静态属性
    private static $_instance = null;

    //禁止直接实例化
    private function __construct()
    {
    }

    //全局访问点
    public static function getInstance(): Singleton
    {
        if (self::$_instance == null) {
            self::$_instance = new static();
        }
        return self::$_instance;
    }

    //禁止克隆
    private function __clone()
    {
    }

    //禁止序列化
    private function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }
}
