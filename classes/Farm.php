<?php
namespace app;

use app\NameGenerator;

Class Farm {
	
	private $animals;
	private $products;

	public function __construct($animals){
		foreach($animals as $animal => $qty){
			$this->addAnimals($animal, $qty);
		}
	}

	public function addAnimals($namespace, $qty){
		$nameGenerator = new NameGenerator();
		for($i = 0; $i < $qty; $i++){
			$animalName = $this::getClassName($namespace);
			$this->animals[$animalName][] = new $namespace($nameGenerator->getName());
		}

	}

	public function collectProducts(){
		foreach($this->animals as $animals){
			foreach($animals as $animal){
				$this->products[$animal::PRODUCT_NAME] += $animal->getProduct();
			}
		}
	}

	public function getProducts(){
		if(empty($this->products)){
			echo 'на сегодня продуктов нет';
		}else{
			foreach($this->products as $product => $qty){
				echo $product.' => '.$qty;
				echo'<br>';
			}
		}
	}

	private function getClassName($namespace){
    	$array = explode('\\',$namespace);
    	return $array[count($array)-1];
	}
}