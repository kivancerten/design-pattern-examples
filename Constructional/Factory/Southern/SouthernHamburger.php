<?php
namespace Constructional\Factory\Southern;

use Constructional\Factory\Food\HamburgerInterface;

class SouthernHamburger implements HamburgerInterface
{
    public function __toString()
    {
        return 'Hamburger from south';
    }

}
