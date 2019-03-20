<?php
    $cookie_name = "user";
    $cookie_value = "benjaphon";
    setcookie($cookie_name,$cookie_value, time() + (86400*30),"/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_COOKIE['user'])) {
            echo "Cookie named '".'user'."' is set!<br>";
            echo "Value is ".$_COOKIE['user'];
        }else {
            echo "Cookie is not set!";
        }
    ?>
</body>
</html>