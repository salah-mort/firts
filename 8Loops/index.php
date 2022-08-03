<?php


//-----------------------------
//For Loop
for ($i = 0; $i < 10; $i++)
    echo " i = $i" . "<br>";

//-----------------------------
//while Loop

$x = 0;
while ($x < 10) {
    echo "x = $x" . "<br>";
    $x++;
}


//-----------------------------
//do{} while() Loop

$y = 0;

do {
    echo "y = $y" . "<br>";
    $y++;
} while ($y > 10);

//----------------------------
//foreach with array


//Indexed Array
$array = array("PHP", "HTML", "CSS", "JS");

foreach ($array as $value)
    echo "value : $value <br>";


//Associative Array

$a = array("PAL" => "Palestine", "KSA" => "Saudi Arabia");


foreach($a as $key => $value)
echo "$key : $value"."<br>";


