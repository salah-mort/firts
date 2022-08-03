<?php

require_once 'Fruit.php';
require_once 'Person.php';

$banana = new Fruit("Banana","BLUE");
echo $banana->getColor();
echo "<br>";

$apple = new Fruit("Apple","RED");
$apple->name = "aa";
$apple->setColor("Yellow");
echo $apple->getColor();

echo "<br>";
$person1 = new Person(1,"Ahmad");
echo $person1;
