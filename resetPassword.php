<?php
include ("Dbconnect.php");
$name = $_POST["resetUser"];
$newPassword = $_POST["newPassword"];

$query = "UPDATE Users SET userID = '$newPassword' WHERE UserID = '$name'";
mysqli_close($db);
?>
