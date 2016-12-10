<?php
include ("Dbconnect.php");
$name = $_POST["resetUser"];
$newPassword = $_POST["newPassword"];


$sql = "UPDATE `users` SET
`UserID` = 'Alfred Hendry',
`Password` = 'password',
`emailAddress` = 'alfredhendry@talktalk.net',
`AccessID` = '3'
WHERE `UserID` = 'Alfred Hendry' AND `UserID` = 'Alfred Hendry' COLLATE utf8mb4_bin";

mysqli_close($db);
?>
