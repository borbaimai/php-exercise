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

<form action='' method='post'>
    <label><h3>Username : </h3></label>
    <input type='text' name='name' value='' />
    <label><h3>Password : </h3></label>
    <input type='text' name='pw' value='' />
    <input type="submit" value="Log in">
</form>

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection fail: " . $conn->connect_error);
} 

echo "<br>last login : ".$_COOKIE["time"];

if (!empty($_POST["name"]) && !empty($_POST["pw"])){

$name=$_POST["name"];
$pw=$_POST["pw"];

$sql = "SELECT id, firstname, lastname FROM tbl_user WHERE username = '$name' AND password = '$pw' ";
$result = mysqli_query($conn, $sql);





if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        $_SESSION["firstname"] = $row["firstname"];
        $_SESSION["lastname"] = $row["lastname"];


        date_default_timezone_set("Asia/Bangkok");
        setcookie("time", date("M,d,Y h:i:s A"), time() + (86400 * 30), "/"); // 86400 = 1 day
     
        echo $_SESSION["firstname"]." ".$_SESSION["lastname"]." last login : ".$_COOKIE["time"]; 
// PHP permanent URL redirection
header("Location: http://localhost/php-exercise/show_lastlogin.php", true, 301);
exit();

}
} else {
    echo "ชื่อผู้ใช้ผิดพลาด";
}





mysqli_close($conn);


}

?>



</body>
</html>