<?php

session_start();

if(isset($_COOKIE['username']) && 
isset($_COOKIE['password'])){
    echo $_COOKIE['username'];
    echo "<br>";
    echo $_COOKIE['password'];
    
    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";

    echo "<a href = 'logout.php'>Logout</a>";
}else
{
    header('Location:login.php');
    exit();
}


