<?php
// Namespaces
// 구역을 나눈다.
//

//class A{}
//
//class A{} //충돌이 생김

namespace A {
	const MSG = __NAMESPACE__;
	
	class A
	{
		public function foo()
		{
			return __METHOD__;
		}
	}
	
	function foo()
	{
		return __FUNCTION__;
	}
	
}

namespace A\B {
	class A{
		public function foo(){
			return __METHOD__;
		}
	}
}

namespace {
	use A\A;
	$a = new A();
	var_dump($a->foo());
}