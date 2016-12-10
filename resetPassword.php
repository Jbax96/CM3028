<?php
include ("Dbconnect.php");
$name = $_POST["resetUser"];
$newPassword = $_POST["newPassword"];


$sql = "UPDATE USERS
SET password='$newPassword';
WHERE userID='$name'";

mysqli_close($db);
?>