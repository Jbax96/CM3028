<?php
/**
 * Created by PhpStorm.
 * User: JBaxt
 * Date: 23/11/2016
 * Time: 11:43
 */

define('DB_SERVER','eu-cdbr-azure-north-e.cloudapp.net');
define('DB_USERNAME','bc1b3a7172a2b2');
define('DB_PASSWORD','e18f37e0');
define('DB_DATABASE','goportlethen');

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if($db ->connect_errno){
    die('Connection failed: '.$db->connect_error.'.');
}

echo "Connected successfully.<br>";

/* Moved the creation of tables to createtables.php */

?>



