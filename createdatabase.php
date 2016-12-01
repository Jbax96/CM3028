<?php
/**
 * Created by PhpStorm.
 * User: 1408721
 * Date: 01/12/2016
 * Time: 12:36
 */

define('DB_SERVER','eu-cdbr-azure-north-e.cloudapp.net');
define('DB_USERNAME','bc1b3a7172a2b2');
define('DB_PASSWORD','e18f37e0');

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
if($db ->connect_errno){
    die('Connection failed: '.$db->connect_error.'.');
}

echo "Connected successfully.<br>";



$sql = "CREATE DATABASE goportlethen";

if ($db->query($sql) === TRUE) {
    echo "Database created successfully.";
} else {
    echo "Error creating database: " . $db->error;
}

$db->close();

#This is unfinished

?>