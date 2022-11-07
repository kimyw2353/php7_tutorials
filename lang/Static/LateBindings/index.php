<?php
/**
 * Static Bindings
 */
class A{
	public static function foo(){
		self::who();
		static::who();
	}
	
	public static function who(){
		var_dump(__CLASS__);
	}
}

class B extends A{
	public static function test(){
		parent::foo();
	}
	
	public static function who(){
		var_dump(__CLASS__);
	}
}

$b = new B();
$b->test();