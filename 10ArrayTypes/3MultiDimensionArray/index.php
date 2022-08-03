<?php

$data = array(
    array("Ali","Ahmad","Mohammad"), //index 0
    array("1","2","3"), //index 1
    array(90,40,60) //index 2
);

echo $data[0][1] ."<br>";

for($i=0;$i<count($data);$i++){
    for($j=0;$j<count($data[$i]);$j++){
        echo $data[$i][$j] ." ";
    }
   echo "<br>";
}

//--------------------------------------------------

$contries = array(
    "Asia" => array("Palestine","Saudi Arabia","Syria"),
    "Africa" => array("Egypt","Sudan",array(1,2,3)),
    "Europe" => array("Spain","France","Portugal")
);

echo $contries["Africa"][2][1];

foreach($contries as $key =>$value){
    echo "<h3>The $key has the following countries:</h3>";
    echo "<ul>";
    foreach($value as $country){
        echo "<li>$country</li>";
    }
    echo "</ul>";
}


