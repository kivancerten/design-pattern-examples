<?php
namespace Constructional\Factory\Southern;

use Constructional\Factory\Cook\CookInterface;

class SouthernCook implements CookInterface
{
    public function createSoup()
    {
        return new SouthernSoup();
    }

    public function createHamburger()
    {
        return new SouthernHamburger();
    }
}
