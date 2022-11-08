<?php

/**
 * interface
 * 인터페이스는 모든 메소드가 구현되지 않은 상태이다.
 * 메소드는 무조건 public이어야 한다.
 * 유저와 소통하기 위한 약속.
 * 자동차의 브레이크는 멈추는 기능인데 멈추는 방식은 다를 수 있지만 기능이 있다는 것을 알 수있다.
 * 기능적인 부분을 표현할 때 사용한다.
 */
function foo(A $a){
	return $a->foo();
}
interface A{
	public function foo();
}

interface AA extends A{
	public function sayHello();
}

class B implements AA{
	public function foo(){
		return __CLASS__;
	}
	
	public function sayHello()
	{
		return 'Hello, world';
	}
}

$b = new B();
var_dump(foo($b));