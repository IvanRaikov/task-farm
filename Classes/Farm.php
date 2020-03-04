<?php
Class Farm {
	
	private $cows;
	private $chikens;
	private $products;

	function __construct($cows, $chikens){
		$this->addCow($cows);
		$this->addChiken($chikens);
	}

	public function addCow($qty){

		for($i = 0; $i < $qty; $i++){
			$cowId = $this->getLastCawId();
			$this->cows[$cowId] = new Cow($cowId);
		}

	}

	public function addChiken($qty){

		for($i = 0; $i < $qty; $i++){
			$chikenId = $this->getLastChikenId();
			$this->chikens[$chikenId] = new Chiken($chikenId);
		}

	}

	public function collectProducts(){
		$milk = 0;
		foreach($this->cows as $cow){
			$milk += $cow -> getMilk();
		}
		
		$eggs = 0;
		foreach($this->chikens as $chiken){
			$eggs += $chiken -> getEggs();
		}

		$this->products = ['milk' => $milk, 'eggs' => $eggs];
	}

	public function getProducts(){
		if(!empty($this->products['milk'])){
			echo 'надой молока с '.count($this->cows).' коров за сегодня '.
			$this->products['milk'].' литров. ';
		}else{
			echo 'молока сегодня нет';
		}
		if(!empty($this->products['eggs'])){
			echo count($this->chikens).' куриц за сегодня снесли '.
			$this->products['eggs'].' яиц';
		}else{
			echo 'яиц сегодня нет';
		}
	}

	private function getLastCawId(){
		if(empty($this->cows)){
			return 1;
		}
		return count($this->cows)+1;
	
	}

	private function getLastChikenId(){
		if(empty($this->chikens)){
			return 1;
		}
		return count($this->chikens)+1;
	
	}
}