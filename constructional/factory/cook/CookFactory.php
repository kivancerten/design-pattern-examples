<?php
namespace Constructional\Factory\Cook;

class CookFactory
{
    public static function getNorthernCook() {
        return new \Constructional\Factory\Northern\NorthernCook();
    }
    public static function getSouthernCook() {
        return new \Constructional\Factory\Southern\SouthernCook();
    }
}
