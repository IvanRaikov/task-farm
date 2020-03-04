<?php
namespace app;

Class NameGenerator{

	private const NAME_QTY = 220;
	private $names;
	
	function __construct(){
		$this->names = file(__DIR__.'/../names.txt');
	}

	public function getName(){
 		return $this->names[rand(0, self::NAME_QTY)];
	}
}