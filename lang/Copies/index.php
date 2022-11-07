<?php
/**
 * Static 정적 영역에 저장되고 공유됨
 * 객체로 접근하는 것 보다 클래스로 직접 접근하는 것을 권장함
 */
class A{
	public static $message = 'Hello';
	public static function foo(){
		//return $this -> $message; 에러남
		return self::$message;
	}
}

var_dump(A::$message);
