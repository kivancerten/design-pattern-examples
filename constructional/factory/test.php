<?php
namespace Constructional\Factory;

include_once '../../autoloader.php';

$cook1 = Cook\CookFactory::getNorthernCook();
$cook2 = Cook\CookFactory::getSouthernCook();

echo $cook1->createHamburger();
echo $cook1->createSoup();

echo $cook2->createHamburger();
echo $cook2->createSoup();

