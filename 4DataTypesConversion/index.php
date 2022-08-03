<?php

$x =5;

$s = strval($x);
echo $s;
echo "<br>";
var_dump($s);
echo "<br>";
var_dump($x);
echo "<br>";

$f = floatval($x);
echo $f;
echo "<br>";
var_dump($f);

$b = boolval($x);
echo $b;
echo "<br>";
var_dump($b);

$i =true;
var_dump($i);
echo "<br>";
$k = intval($i);
var_dump($k);

//=====================================

$m = 10;

var_dump((float)$m) ;
echo "<br>";
var_dump((int)$m) ;
echo "<br>";
var_dump((integer)$m) ;
echo "<br>";
var_dump((bool)$m) ;
echo "<br>";
var_dump((boolean)$m) ;
echo "<br>";
var_dump((string)$m) ;
echo "<br>";
var_dump((array)$m) ;

