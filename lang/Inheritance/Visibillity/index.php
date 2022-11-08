<?php
/**
 * Visibillity 가시성
 * 외부에서 접근할 때 사용
 */
class A{
	protected $message;
	public function __construct() {
	var_dump($this->message);
}
//	public $public = 'public'; //모든 곳에서 접근 가능
//	protected $protected = 'protected'; //상속받은 클래스로 프로퍼티나 함수에 접근 가능
//	private $private = 'private'; //상속에서도 접근 불가능, 내부에서만 접근 가능
}
//$a = new A();
//var_dump($a->public);
//var_dump($a->protected); Uncaught Error: Cannot access protected property A::$protected
//var_dump($a->private);

class B extends A
{
	private function __construct() {
	}
	
	public static function getInstance(){
		return new self();
	}
}

//$b = new B(); //생성자가 private라면 new로 객체를 생성할 수 없고, 클래스로 메소드에 바로 접근해야함.
//var_dump($b->foo());
B::getInstance();