<?php
class Chiken {
	public $id;
	public $name;

	function __construct($id){
		$this -> id = $id++;
		$this->name = NameGenerator::getName();
	}

	public function getEggs(){
		return rand(0, 1);
	}
}