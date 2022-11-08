<?php
/**
 * Magic Methods property
 */

class A{
	private $msg;
	public function __isset($name){
		return isset($this->$name);
	}
	
	public function __unset($name){
		unset($this->$name);
	}
	
	public function __get($name){
	
	}
	
	public function __set($name, $value){
		$this->$name = $value;
		var_dump($value);
	}
}

$a = new A();
$a->msg = 'hello Yael?';