<?php

function __autoload($class){
    require_once $class . ".php";
}

$a1 = new Alunno("a1", "b1", 14);
$a2 = new Alunno("a2", "b2", 13);
$a3 = new Alunno("a3", "b3", 15);
$a4 = new Alunno("a4", "b4", 16);
$a5 = new Alunno("a5", "b5", 17);
$a6 = new Alunno("a6", "b6", 11);
$a7 = new Alunno("a7", "b7", 10);
$a8 = new Alunno("a8", "b8", 19);
$a9 = new Alunno("a9", "b9", 15);

$c = array($a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9);

foreach ($c as $a) {
    echo $a->__toString();
}

?>