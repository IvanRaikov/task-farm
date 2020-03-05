<?php
namespace app;

abstract class Animal{

	public $name;

	public function __construct(string $name){
		$this->name = $name;
	}

	abstract public function getProduct();
}