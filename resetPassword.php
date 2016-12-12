<?php
include ("Dbconnect.php");

function createRandomPassword() {
    $chars = "ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz0123456789";
    $i = 0;
    $pass = '' ;

    while ($i <= 8) {
        $num = mt_rand(0,61);
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
    }
    return $pass;
}

function sendMail($name, $email) {
    $subject = 'Your New Password';
}

$name = $_POST["name"];

$nameQuery = "SELECT UserID FROM USERS WHERE UserID='$name'";

if (mysqli_num_rows($nameQuery) != 0)
{
    echo "Username does not exist";
}
else {
    $query = "UPDATE Users SET Password = '$newPassword' WHERE emailAddress = '$email'";
    #change the password that matches the name
    #get the email that matches the name
    #send an email with the new password
}





mysqli_close($db);
?>
