<?php
/**
 * Trait
 * 클래스의 일부분
 * 특성이 포함되어있어야 함.
 */

trait A{
	public $msg = 'hello';
	
	public function sayhello(){
		return $this->msg;
	}
	abstract protected function foo();
}

trait AA{
	public function sayhello(){
		return __TRAIT__;
	}
}

trait AAA{
	use A, AA{
		A::sayhello insteadof AA;
		//A 의 sayhello를 사용하겠다는 뜻.
		A::sayhello as protected h;
	}
}


class B{
	use AAA;
	
	public function foo()
	{
		return __CLASS__;
	}
}

$b = new B();
var_dump($b->sayhello());
//var_dump($b->h);

class C{
	private $msg = 'hello';
	public function sayHello(){
		return $this->msg;
	}
}

trait D{
	public function sayHello(){
		return __TRAIT__;
	}
}

class E extends C{
	use D;
	public function sayHello(){
		return __CLASS__;
	}
}

$e = new E();
var_dump($e->sayHello());

