<?php
class Cow {
	public $id;

	function __construct($id){
		$this -> id = $id++;
		$this->name = NameGenerator::getName();
	}

	public function getMilk(){
		return rand(8, 12);
	}
}