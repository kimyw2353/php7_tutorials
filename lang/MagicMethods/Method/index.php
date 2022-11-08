<?php
/**
 * Magic Methods
 */
class A{
	public function __call($name, $arguments)
	{
		//정의되지 않은 메소드를 호출할 때 대신 호출된다.
		var_dump($name, $arguments);
	}
	
	public static function __callStatic($name, $arguments)
	{
		// TODO: Implement __callStatic() method.
		var_dump($name, $arguments);
	}
	
	public function __invoke(...$arguments){
		var_dump($arguments);
		
	}
}

$a = new A();
//$a->foo1('yael');
A::foo2('uh?');
$a('hello?');