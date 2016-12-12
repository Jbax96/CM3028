<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include ("Dbconnect.php");
$name = $_POST["name"];
$password = $_POST["password"];

$nameQuery = "SELECT UserID FROM USERS WHERE UserID=$name";
$passQuery = "SELECT Password FROM USERS WHERE UserID=$name AND Password=$password";

if (mysqli_num_rows($nameQuery) != 0)
{
    echo "Username does not exist";
}
else if ($passQuery){


    if (mysqli_query($db, $sql)) {
        echo "New record created successfully";
        header("Location: index.html");
    } else {
        echo "Error: " . $sql . mysqli_error($db);
    }
}

mysqli_close($db);
?>