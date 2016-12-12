<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include ("Dbconnect.php");
$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];
$accountType = $_POST["accountType"];
$nameQuery = mysql_query("SELECT UserID FROM USERS WHERE UserID=$name", $con);

if (mysql_num_rows($query) != 0)
{
    $passQuery = mysql_query("SELECT Password FROM USERS WHERE Password=$password", $con);
    if ( mysql_num_rows($passQuery) != 0){
        
    }
}
else {
    $sql = "INSERT INTO USERS ( userID, password, emailAddress, accessID) VALUES ( '$name', '$password', '$email', '$accountType')";

    if (mysqli_query($db, $sql)) {
        echo "New record created successfully";
        header("Location: index.html");
    } else {
        echo "Error: " . $sql . mysqli_error($db);
    }
}

mysqli_close($db);
?>
