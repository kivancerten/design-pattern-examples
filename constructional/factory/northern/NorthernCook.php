<?php
namespace Constructional\Factory\Northern;

use Constructional\Factory\Cook\CookInterface;

class NorthernCook implements CookInterface
{
    public function createSoup()
    {
        return new NorthernSoup();
    }

    public function createHamburger()
    {
        return new NorthernHamburger();
    }

}
