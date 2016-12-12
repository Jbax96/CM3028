<?php
include ("Dbconnect.php");
$name = $_POST["name"];
$password = $_POST["password"];
$nameQuery = mysql_query("SELECT UserID FROM USERS WHERE UserID=$name", $con);

if (mysql_num_rows($namequery) != 0)
{
    $passQuery = mysql_query("SELECT Password FROM USERS WHERE Password=$password", $con);
    if ( mysql_num_rows($passQuery) != 0){
        echo"success";
        header("location: index.html");
    }
}
else {
    echo"Invalid Account";
    header("location: login.html");


mysqli_close($db);
?>
