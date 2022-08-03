<?php



// array_push($data,2,3,4,5); //the last

// array_unshift($data,101); //the first

// echo "<pre>";
// print_r($data);
// echo "</pre>";

// $x = array_pop($data);
// echo $x;
// echo "<br>";

// $y = array_shift($data);

$data = array(1,2,3,7,9);

$index = array_search(3,$data,true);
echo $index;
unset($data[$index]);

var_dump(in_array(3,$data,true));

echo "<pre>";
print_r($data);
echo "</pre>";

