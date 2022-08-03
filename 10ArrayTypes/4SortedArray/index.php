<?php

$data = array(1,5,10,0,5,3,2,6);

sort($data);

echo "<pre>";
print_r($data);
echo "</pre>";


$arr = array(
    "3"=>"Palestine",
    "1" => "Egypt",
    "2" => "Syria"
);

//asort($arr);
ksort($arr);


echo "<pre>";
print_r($arr);
echo "</pre>";