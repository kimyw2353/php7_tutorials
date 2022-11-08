<?php

$msg = 'hello message~';
$sayHello =& $msg;
var_dump($msg); //'hello message~' 출력
$sayHello = 'Who are you?';

var_dump($msg); //'Who are you?' 출력



