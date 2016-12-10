<?php
include ("Dbconnect.php");
$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];
$accountType = $_POST["accountType"];
$newPassword = $_POST["newPassword"];


$sql = "UPDATE USERS
SET password='$newPassword';
WHERE userID='$name''";

mysqli_close($db);
?>