<?php

class SingletonCarFactory
{
    private static $SingletonCar;

    private function __construct()
    {
        echo 'building a new factory...';
    }

    public static function getInstance()
    {
        if (! self::$SingletonCar instanceof Car) {
            return self::$SingletonCar = new Car();
        }
        return self::$SingletonCar;
    }
}
