<?php

$x =3;
$y = "3";

echo $x ** $y;
echo "<br>";
echo $x <> $y;
echo "<br>";
echo $x == $y;
echo "<br>";
echo $x === $y;
echo "<br>";
echo $x <=> $y;

//Ternary Operator
echo $result = $x===3? "TRUE" : "FALSE";

$user="hazem";

echo $user = $user?? "Admin";
