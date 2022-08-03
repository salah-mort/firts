<?php

//Indexed Array using array() function
$data = array("Ahmad","Mohammad","Ali",65);


$data[]="ABC";

$data[2] = "Abduallah";

echo $data[3];
echo "<br>";
echo "<pre>";
print_r($data);
echo "</pre>";

//------------------------

echo "<br>";


for($i=0;$i<count($data);$i++){
    echo $data[$i]."<br>";
}

