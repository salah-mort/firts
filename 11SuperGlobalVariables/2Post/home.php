<?php


if($_SERVER['REQUEST_METHOD'] == "POST"){

    $users = array("admin","user1","hzm","hazem");
    $username = $_POST['username'];
    if(in_array($username,$users)){
        $password = $_POST['password'];
    
        echo $username;
        echo "<br>";
        echo $password;
    }else
    echo "Invalid user";
}

