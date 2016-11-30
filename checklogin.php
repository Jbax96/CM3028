<?php
/**
 * Created by PhpStorm.
 * User: 1408721
 * Date: 30/11/2016
 * Time: 13:26
 */
include ("Dbconnect.php");
$username = $_POST["name"];
$password = $_POST["password"];

if($username == "username" && $password == "password"){
    setcookie('','');
}

?>