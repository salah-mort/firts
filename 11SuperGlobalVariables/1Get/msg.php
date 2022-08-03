<!DOCTYPE html>
<html>
    <head>
        <title>Get Method</title>
    </head>

    <body>

<?php

if(empty($_GET['msg'])){
echo "Message is empty";
}else
echo $_GET['msg'];

?>

    <form method="GET" action="<?php $_SERVER['PHP_SELF']?>">
     <input type="text" name="msg"/>
     <input type="submit" value="Click Here"/>
    </form>
    </body>
</html>