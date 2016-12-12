<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include ("Dbconnect.php");
$name = $_POST["name"];
$password = $_POST["password"];

$query = "SELECT Password FROM USERS WHERE UserID=$name";

if (mysqli_num_rows($query) != 0)
{
    $passQuery = mysqli_query("SELECT Password FROM USERS WHERE Password=$password", $con);
    if ( mysqli_num_rows($passQuery) != 0){
        
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