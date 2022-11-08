<?php
//Compare

$class1 = new stdClass();
$class2 = new stdClass();

var_dump($class1 == $class2); //값을 비교
var_dump($class1 === $class2); //주소값을 비교

//Copy
$class3 = $class1;

$class3->sayHello = 'Hello';
var_dump($class1->sayHello);