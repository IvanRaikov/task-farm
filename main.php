<?php

require_once __DIR__.'/vendor/autoload.php';

use app\Chiken;
use app\Cow;
use app\Farm;

$animals = array(Cow::class=>10, Chiken::class=>20);

$farm = new Farm($animals);
$farm->collectProducts();
$farm->getProducts();
