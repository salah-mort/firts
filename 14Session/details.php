<?php

session_start();

if(isset($_SESSION['username']) && 
isset($_SESSION['password'])){
    echo $_SESSION['username'];
    echo "<br>";
    echo $_SESSION['password'];
    
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    echo "<a href = 'logout.php'>Logout</a>";
}else
{
    header('Location:login.php');
    exit();
}


