<?php

//-----------------------------
//If Statement
$sitelang = "ar";

if ($sitelang == "ar")
    echo "Website Language is Arabic <br>";
else
    echo "Other Language <br>";

//-----------------------------
//elseif Statement

$average = 90;

if ($average >= 90) {
    echo "A" . "<br>";
    echo "AA" . "<br>";
    echo "AAA" . "<br>";
} elseif ($average >= 80)
    echo "B" . "<br>";
elseif ($average >= 70)
    echo "C" . "<br>";
else
    echo "F" . "<br>";

//-----------------------------
//Switch case

$color = "red";

// switch ($color) {
//     case "red":
//         echo "Website Background color is red";
//         break;
//     case "blue":
//         echo "Website Background color is Blue";
//         break;
//     case "green":
//         echo "Website Background color is Green";
//         break;

//     default:
//         echo "Unknown Color";
// }

switch ($color) :
    case "red":
        echo "Website Background color is red";
        break;
    case "blue":
        echo "Website Background color is Blue";
        break;
    case "green":
        echo "Website Background color is Green";
        break;

    default:
        echo "Unknown Color";
    endswitch;

    
