<?php 
session_start(); 
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

    $servername = "localhost";
    $username = "root";
    $password = "bonnsql";
    $dbname = "test2";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    
    $sql = "SELECT id, fname, lname FROM tbl_user WHERE user='{$_POST["name"]}' and  passwd='{$_POST["pw"]}'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($result);
        $fullname=$row["fname"]."  ".$row["lname"];
        $_SESSION["fullname"] = $fullname;
        $cookie_name = "lastLogin";
        $cookie_value = date("Y/m/d")." - ".date("h:i:sa");
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    } else {
    echo "<br>0 results";
    }
    
    mysqli_close($conn);
    
if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named " . $cookie_name . "' is not set!";
} else {
    echo "<br>Last login time of user " . $_SESSION["fullname"];
    echo " is: " . $_COOKIE["lastLogin"];
}
?>
</body>
</html>