<?php
 require_once 'config.php';

 $std_id = $_GET['id'];
 $sql = "select * from student where id=".$std_id;
 $result = mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0){
     $row = mysqli_fetch_assoc($result);
     $std_name = $row["name"];
     $std_email = $row["email"];
     $std_average = $row["average"];
 }

 if(isset($_POST['std_update'])){
    $std_name = $_POST['std_name'];
    $std_email = $_POST["std_email"];
    $std_average = $_POST["std_average"];
    
     $sql = "update student set name = '$std_name', email = ' $std_email', average = '$std_average' where id=". $std_id;
     if(mysqli_query($conn,$sql)){
        header('Location:index.php');
        exit();
     }else
     echo "Error";
 }
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Update Student</title>
 </head>
 <body>
 <form method="POST" action="">
     Name : <input type="text" name="std_name" required value="<?php echo $std_name;?>"/>
     <br>
     Email : <input type="email" name="std_email" required value="<?php echo $std_email;?>"/>
     <br>
     Average : <input type="number" name="std_average" required value="<?php echo $std_average;?>"/>
     <br>
     <input type="submit" value="Update Student" name="std_update"/>
    </form>
 </body>
 </html>