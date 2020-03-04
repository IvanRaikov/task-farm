<?php
spl_autoload_register(function($className){
        $path = __DIR__.'/Classes/'.$className.'.php';        
        if(is_readable($path)){
            require $path;        
        }    
    });

$caws = 10;
$chikens = 20;

$farm = new Farm($caws, $chikens);
$farm->collectProducts();
$farm->getProducts();
