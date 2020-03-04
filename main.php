<?php
require_once __DIR__.'/vendor/autoload.php';

$animals = array('cow'=>10, 'chiken'=>20);

$farm = new app\Farm($animals);
$farm->collectProducts();
$farm->getProducts();
