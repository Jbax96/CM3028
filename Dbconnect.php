<?php
/**
 * Created by PhpStorm.
 * User: JBaxt
 * Date: 23/11/2016
 * Time: 11:43
 */

define('DB_SERVER','servername');
define('DB_USERNAME','username');
define('DB_PASSWORD','password');
define('DB_DATABASE','database');

$db = mysqli_connect(DB_SERVER,DB_USERNAME, DB_PASSWORD, DB_DATABASE);