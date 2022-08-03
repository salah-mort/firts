<?php

if(isset($_COOKIE['username']) && 
isset($_COOKIE['password'])){
    echo $_COOKIE['username'];
    echo "<br>";
    echo $_COOKIE['password'];
    
    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";

    echo "<a href = 'details.php'>Details Page</a>";
}else
{
    header('Location:login.php');
    exit();
}


