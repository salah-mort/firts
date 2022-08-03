<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Page</title>
</head>

<body>

    <?php

    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $year = $_POST['year'];
        //$Development = $_POST['Development'];
        //$Programming = $_POST['Programming'];
        $comments = $_POST['comments'];
        //$skills = $_POST['skills'];

        //print_r($_POST);
    }
    ?>

    <form method="POST" action="">
        Name :
        <input type="text" name="name" />
        <br>
        Email :
        <input type="email" name="email" />
        <br>
        Phone :
        <input type="tel" name="phone" />
        <br>
        Gender :
        <input type="radio" name="gender" value="male" id="male" checked />
        <label for="male">Male</label>
        <input type="radio" name="gender" value="female" id="female" />
        <label for="female">Female</label>
        <br>
        Year of Birth:
        <select name="year">
            <?php
            for ($year = 2022; $year >= 1970; $year--) {
                echo "<option value = '$year'>$year</option>";
            }
            ?>
        </select>
        <br>
        Skills:
        <br>
        <input type="checkbox" value="Development" name="skills[]" id="Development" />
        <label for="Development">Web Development</label>
        <br>
        <input type="checkbox" value="Programming" name="skills[]" id="Programming" />
        <label for="Programming">Java Programming</label>
        <br>
        Comments:
        <textarea name="comments" cols="30" rows="7"></textarea>
        <br>
        <input type="submit" value="Register" name="register" />
    </form>
</body>

</html>