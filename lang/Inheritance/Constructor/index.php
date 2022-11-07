<?php

/**
 * Constructor, Destructor 생성자, 소멸자
 * 생성자는 객체가 생성될 때 생성됨
 * 소멸자는 객체가 소멸될 때 생성됨
 */
class A
{
	public function __construct()
	{
		var_dump(__METHOD__.'---1--');
	}
	
	public function __destruct()
	{
		var_dump(__METHOD__.'---2--');
	}
}

//
$a = new A();
//unset($a); //종료시키면 destruct 먼저 실행됨
var_dump('Hello');

/**
 * Constructor Parameters
 */
class B
{
	public $message;
	
	public function __construct($message)
	{
		$this -> message = $message;
		var_dump(__METHOD__.'---3--');
		$this -> printConst();
	}
	
	public function printConst()
	{
		var_dump($this -> message);
	}
	
	public function __destruct()
	{
		var_dump(__METHOD__.'---4--');
	}
}

$b = new B('This is constructor Parameter');

/**
 * Inherit
 */
//class C extends A{
//}
//$c = new C();
class C extends A{
	public function __construct() {
		parent::__construct();
	}
}
$c = new C();
