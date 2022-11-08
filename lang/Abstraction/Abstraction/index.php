<?php
/**
 * Class Abstraction
 * 최상위 클래스는 객체를 생성하지 않고 자식클래스로만 구현하기를 원할 때 사용함.
 */
abstract class A{
	protected $message = 'Say Hello';
	public function sayHello(){
		return $this->message;
	}
	abstract public function foo();
}

class B extends A{
	public function foo(){
		return __CLASS__;
	}
}

$b = new B();

var_dump($b->foo());
var_dump($b->sayHello());