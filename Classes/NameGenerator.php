<?php
Class NameGenerator{
	private const nameQty = 220;
	public static function getName(){
		$lines = file(__DIR__.'/../names.txt');
 		return $lines[rand(0, self::nameQty)];
	}
}