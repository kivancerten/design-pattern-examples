<?php
namespace Constructional\Factory\Southern;

use Constructional\Factory\Food\SoupInterface;

class SouthernSoup implements SoupInterface
{
    public function __toString()
    {
        return 'Soup from south';
    }

}
