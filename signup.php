<?php
/**
 * Created by PhpStorm.
 * User: 1408721
 * Date: 30/11/2016
 * Time: 13:01
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

include ("Dbconnect.php");
$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];
$accountType = $_POST["accountType"];

$sql = "INSERT INTO USERS ( UserID, Password, emailAddress, AccessID) VALUES ( '$name', '$password', '$email', '$accountType')";
echo '<script type="text/javascript">alert("Attempting to insert into USERS.");</script>';


if (mysqli_query($db, $sql)) {
    echo "New record created successfully";
    echo '<script type="text/javascript">alert("Got to record created.");</script>';
} else {
    echo "Error: " .$sql. mysqli_error($db);
    echo '<script type="text/javascript">alert("Got to record failed to create.");</script>';
}

mysqli_close($db);
?>