<?php
/**
 * Generator
 * 메모리 사용에서 우위를 확인하기 위함. 시간, 메모리 등
 */
function gen()
{
	yield 1;
	yield 2;
	yield 3;
}

$gen = gen();
//var_dump($gen->current());
//
//$gen->next();
//var_dump($gen->current());

//foreach ($gen as $num){
//	var_dump($num);
//}

//function gen2(){
//	yield 1;
//	yield from gen();
//	yield 3;
//}
//
//foreach (gen2() as $num){
//	var_dump($num);
//}

//function gen3()
//{
//	yield 'message' => 'hello';
//}
//
//foreach (gen3() as $key => $value) {
//	var_dump($key, $value);
//}
 function gen4(){
	 $data = yield;
	 yield $data;
 }
 $gen4 = gen4();
 var_dump($gen4->current()); //null

var_dump($gen4->send('hello?'));

function __range($start, $end, $step = 1){
	for ($i = 0; $i < $end; $i += $step){
		yield $i;
	}
}

$s = microtime(true);
