<?php
include ("Dbconnect.php");
$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];
$accountType = $_POST["accountType"];
$newPassword = $_POST["newPassword"];


$sql = "INSERT INTO USERS ( userID, Password, emailAddress, accessID) VALUES ( '$name', '$newPassword', '$email', '$accountType')";

if (mysqli_query($db, $sql)) {
    echo "New record created successfully";
    header("Location: index.html");
} else {
    echo "Error: " . $sql . mysqli_error($db);
}


mysqli_close($db);
?>