<?php
namespace app;
use app\Animal;

class Cow extends Animal{

	public const PRODUCT_NAME = 'milk';

	public function getProduct(){
		return rand(8, 12);
	}
}