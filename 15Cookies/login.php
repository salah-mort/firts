<?php




if(isset($_POST['login'])){
    setcookie('username',$_POST['username'],time()+(60*60*24*30),"/");
    setcookie('password',$_POST['password'],time()+(60*60*24*30),"/");
    header('Location:home.php');
    exit();
}

if(count($_COOKIE)>0)
echo "Cookies are enabled";
else
echo "Cookies are not enabled";

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
    <form action="" method="POST">
        <input type="text" name="username" required/>
        <br>
        <input type="password" name="password" required/>
        <br>
        <input type="submit" value="Login" name="login"/>
    </form> 
</body>
</html>
