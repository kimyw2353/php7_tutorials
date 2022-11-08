<?php

/**
 * Final
 * final이 없으면 자식 클래스에서 재정의 할 수 있다.
 */
class A
{
	public $message;
	
	public final function foo() {
		var_dump('parent foo');
	}
}

class B extends A
{
	public function foo(){
	
	}
}
//Fatal error: Cannot override final method