<?php
/**
 * Propertiess and Methods
 */
class A{
	public $message = 'Hello World'; //프로퍼티 정의
	
	public function foo(){
		return $this->message;
	}
	
}

$a = new A();
var_dump($a->foo());

/**
 * Inherit 상속
 *
 */
class B extends A{

}

$b = new B();
var_dump($b->foo());

/**
 * in Function
 */
function foo(A $a){
	return $a -> foo();
}
var_dump(foo($a));
var_dump(foo($b));

/**
 * Context
 */
class C extends A{
	public function foo()
	{
		//return new self();
		//return new static();
		return new parent();
	}
}

class D extends C{

}

$d = new D();
var_dump($d->foo());