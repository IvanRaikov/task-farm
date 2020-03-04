<?php
namespace app;

abstract class Animal{

	function __construct(int $id, string $name){
		$this->id = $id;
		$this->name = $name;
	}

	abstract public function getProduct();
}