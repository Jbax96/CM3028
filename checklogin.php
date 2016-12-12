<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include ("Dbconnect.php");
$name = $_POST["name"];
$password = $_POST["password"];

$nameQuery = mysqli_query($db,"SELECT UserID FROM USERS WHERE UserID='".$name."'");
$passQuery = mysqli_query($db,"SELECT UserID, Password FROM USERS WHERE UserID='$name' AND Password='$password'");

if (mysqli_num_rows($nameQuery) != 0)
{
    echo "<script>
    alert('Username does not exist');
    window.location.href='login.html';
    </script>";
}
else if (mysqli_num_rows($passQuery) != 0){

    $sql = mysqli_query($db, "SELECT AccessID FROM USERS WHERE UserID='$name' AND Password='$password'");

    if (mysqli_query($db, $sql)) {
        $row = mysqli_fetch_row($sql);
        setcookie('access_cookie',$row);
        header("Location: loggedin.php");
    } else {
        echo "Error: " . $sql . mysqli_error($db);
    }
} else {
    echo "<script>
    alert('Incorrect password');
    window.location.href='login.html';
    </script>";
}

mysqli_close($db);
?>