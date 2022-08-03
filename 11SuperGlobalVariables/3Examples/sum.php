<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Page</title>
</head>

<body>

    <?php
    $sum = 0;

    if (isset($_POST['sum'])) {
        $x = $_POST['x'];
        $y = $_POST['y'];
        $sum = $x + $y;
    }

    ?>
    <form method="POST" action="">
        First Number:
        <input type="number" name="x" />
        <br>
        Second Number:
        <input type="number" name="y" />
        <br>
        The Result:
        <input type="number" name="result" value="<?php echo $sum; ?>" />
        <br>
        <input type="submit" value="sum" name="sum" />

    </form>
</body>

</html>