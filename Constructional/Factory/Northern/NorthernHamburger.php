<?php
namespace Constructional\Factory\Northern;

use Constructional\Factory\Food\HamburgerInterface;

class NorthernHamburger implements HamburgerInterface
{
    public function __toString()
    {
        return 'hamburger from north';
    }
}
