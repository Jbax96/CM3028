<?php
/**
 * Created by PhpStorm.
 * User: 1408721
 * Date: 30/11/2016
 * Time: 13:01
 */
include ("Dbconnect.php");
$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];
$accountType = $_POST["accountType"];

$sql = "INSERT INTO USERS ( UserID, Password, emailAddress, AccessID) VALUES ( '$name', '$password', '$email', '$accountType')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " .$sql. mysqli_error($conn);
}

mysqli_close($conn);
?>