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
$password2 = $_POST["password2"];
$email = $_POST["email"];
$accountType = $_POST["accountType"];
$result = mysqli_query("SELECT UserID FROM USERS WHERE UserID=$name");

if(mysql_num_rows($result) != 0) {
    $_SESSION['name']=$name;
    echo("Username already exists");
} else if ($password == $password2){
    $sql = "INSERT INTO USERS ( UserID, Password, emailAddress, accessID) VALUES ( '$name', '$password', '$email', '$accountType')";

    if (mysqli_query($db, $sql)) {
        echo "New record created successfully";
        header("location: index.html");
    } else {
        echo "Error: " .$sql . mysqli_error($db);
    }
}

mysqli_close($db);
?>