<?php

require_once 'config.php';

$std_id = $_GET['id'];
echo $std_id;

$sql = "delete from student where id=". $std_id;
if(mysqli_query($conn,$sql)){
    //echo "Deleted Successfully";
    header('Location:index.php');
    exit();
}else
echo "Error";