<?php
//Exception Syntax
//try {
//	throw new Exception('hello yael');
//} catch (Exception $e) {
//	var_dump($e -> getMessage());
//} finally {
//	var_dump('Finally');
//}

set_error_handler(function ($errno, $errstr){
	throw new ErrorException($errstr, $errno);
});

set_exception_handler(fn (Exception $e) => var_dump($e->getMessage()));

// error
try {
	new MyClass();
} catch (Error $e) {
	var_dump($e->getMessage());
}