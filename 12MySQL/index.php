<?php

require_once 'config.php';

if(isset($_POST["std_add"])){

    $std_name = $_POST["std_name"];
    $std_email = $_POST["std_email"];
    $std_average = $_POST["std_average"];

    //if(empty($std_name))

    $sql = "insert into student(name,email,average)
values('$std_name', '$std_email', '$std_average')";

if(mysqli_query($conn,$sql)){
    echo "New Student Added Successfully";
}else
echo "Error ".$sql. mysqli_error($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
     Name : <input type="text" name="std_name" required/>
     <br>
     Email : <input type="email" name="std_email" required/>
     <br>
     Average : <input type="number" name="std_average" required/>
     <br>
     <input type="submit" value="Add Student" name="std_add"/>
    </form>


    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Average</th>
        </tr>

        <?php

           $sql = "select * from student order by id desc";
           $result = mysqli_query($conn,$sql);

           //var_dump( $result);

           if(mysqli_num_rows($result)>0){

            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['average']."</td>";
                echo "<td><a href='delete.php?id=".$row["id"]."'>Delete</a></td>";
                echo "<td><a href='update.php?id=".$row["id"]."'>Update</a></td>";

                echo "</tr>";
            }
           }else
           echo "0 results";
           
        ?>

    </table>
</body>
</html>
