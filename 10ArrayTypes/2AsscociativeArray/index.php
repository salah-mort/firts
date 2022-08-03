<?php

$person = array(
    null => 23,
    false => 76,
    true => 36,
    10.5 => 23,
    "Ali" => 34,
    "Ali" => 54,
    "Amjad" => 40,
    "Mohammad" => 55,
    567
);

$person["Hazem"]=30;

echo $person["Ali"];

echo "<pre>";
print_r($person);
echo "</pre>";

echo "<br>";

echo count($person);

