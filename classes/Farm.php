<?php
namespace app;

use app\NameGenerator;
use app\Cow;
use app\Chiken;

Class Farm {
	
	private $animals;
	private $products;

	function __construct($animals){
		foreach($animals as $animal => $qty){
			$this->addAnimals($animal, $qty);
		}
		
	}

	public function addAnimals($animal, $qty){
		$nameGenerator = new NameGenerator();
		for($i = 0; $i < $qty; $i++){
			$id = $this->getLastAnimalId($animal);
			$animalName = $nameGenerator->getName();
			$animalClass = "app\\".ucfirst($animal);
			$this->animals[$animal][$id] = new $animalClass($id, $animalName);
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

	private function getLastAnimalId($animal){
		if(!isset($this->animals[$animal]) || empty($this->animals[$animal])){
			return 1;
		}
		return count($this->animals[$animal])+1;
	
	}
}