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
$query = mysql_query("SELECT UserID FROM USER WHERE UserID=$name", $con);

if(mysql_num_rows($query) > 0) {
    $_SESSION['name']=$name;
    header("Location: signup.php");
    echo"Username already exist";
} else{
    $sql = "INSERT INTO USERS ( userID, password, emailAddress, accessID) VALUES ( '$name', '$password', '$email', '$accountType')";

    if (mysqli_query($db, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " .$sql . mysqli_error($db);
    }
}

header("location: index.html");

mysqli_close($db);
?>
