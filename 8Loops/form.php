<?php

$x = 20;

?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    
    <h1><?php echo $x ?></h1>

    <ul>

    <?php

    $array = array("HTML","CSS","JS","PHP");

    foreach($array as $value){
        echo "<li>$value</li>";
    }
    ?>
    </ul>

    <br>

    <?php

echo "<select name = 'country'>";
$country = array("PAL"=>"Palestine", "EGY"=>"EGYPT","KSA"=>"Saudi Arabia");

foreach($country as $key => $value){

    echo "<option value ='$key'>$value</option>";
}
echo "</select>";
    ?>
    
</body>

</html>

