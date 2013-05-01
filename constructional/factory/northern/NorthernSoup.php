<?php
namespace Constructional\Factory\Northern;

use Constructional\Factory\Food\SoupInterface;

class NorthernSoup implements SoupInterface
{
    public function __toString()
    {
        return 'Soup from north';
    }
}
