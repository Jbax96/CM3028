<?php
include ("Dbconnect.php");
$name = $_POST["resetUser"];
$newPassword = $_POST["newPassword"];


$sql = "UPDATE `users` SET password = '$newPassword' WHERE `UserID` = '$name'";

mysqli_close($db);
?>
