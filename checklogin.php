<?php
include ("Dbconnect.php");
$name = $_POST["name"];
$password = $_POST["password"]

// To protect MySQL injection (more detail about MySQL injection)
$name = stripslashes($name);
$password = stripslashes($mypassword);
$name = mysql_real_escape_string($myusername);
$password = mysql_real_escape_string($mypassword);

$encrypted_password=md5($password);

$sql="SELECT * FROM USERS WHERE username='$name' and password='$encrypted_password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("username");
session_register("encrypted_password"); 
header("location:index.html");
}
else {
echo "Wrong Username or Password";
}



mysqli_close($db);
?>
