<?php

echo "<h1>AAA</h1>";

$x=5;
$b=true;
$bb=false;
$f=3.5;
$s="Ahmad";
$c='AAA';
$a = array(1,2,3,4,5);

echo $b;
echo "<br>";
var_dump($b);
echo "<br>";
var_export($b);
echo "<br>";
var_dump($s);
echo "<br>";
var_dump($a);
echo "<br>";


//--------------------------
//Scope
//1-Local
//2-Global
//3-Static

$k =6;

function myTest(){

    //global $k;
    //echo $k;
    //$m=10;
    //echo $m;
    $GLOBALS['k'] =10;
    echo $GLOBALS['k'];
    
}


myTest();
echo $k;
$k++;
echo $k;


function myFun(){
     static $count=0;
     global $count;
    echo $count;
    $count++;
}


myFun();
myFun();
myFun();
?>