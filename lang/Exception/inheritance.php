<?php

/**
 * Exception extends
 */
class MyException extends Exception
{

}

try {
	throw new MyException('hello');
} catch (MyException|Exception $e) {
	var_dump(Exception::class);
}