<?php
namespace app;

class Chiken extends Animal{

	public const PRODUCT_NAME = 'eggs';

	public function getProduct(){
		return rand(0, 1);
	}
}