<?php

declare(strict_types=1);

function welcome()
{
    echo "===============<br>";
    echo "Welcome Admin <br>";
    echo "===============<br>";
}

//----------------------------------------

function welcomeUser($username)
{
    echo "===============<br>";
    echo "Welcome $username <br>";
    echo "===============<br>";
}

//----------------------------------------

function getTicket($user, $age, $address = "Unknown")
{
    if ($age >= 30) {
        $ticket = rand(1000, 1000000);
        $msg = "Hello $user <br>";
        $msg .= "Your Address is $address <br>";
        $msg .= "You are qualified to get a ticket , your ticket number is $ticket <br>";
        echo $msg;
    } else {
        $msg = "Hello $user <br>";
        $msg .= "Your Address is $address <br>";
        $msg .= "Sorry, You are not qualified to get a ticket! <br>";
        echo $msg;
    }
    
    //echo "user: $user , age : $age , Address : $address <br>";
}

//----------------------------------------

function sum(int $x , int $y){
    return $x+$y;
}
//----------------------------------------

function sumfloat(float $x, float $y) : int{
return (int)($x+$y);
}

//----------------------------------------

function addFive($value){
    $value+=5;
}

//----------------------------------------
welcome();
welcomeUser("Ahmad");
getTicket("Ahmad", 34);
getTicket("Mohammad", 28, "Gaza");
//$result = sum(2,"3days");
$result = sum(2,5);
echo "Sum = $result";
echo "<br>";
$sumf = sumfloat(4.5,7);
echo "Sum float = $sumf";
echo "<br>";

$salary = 200;
addFive($salary);
addFive($salary);
echo $salary;


