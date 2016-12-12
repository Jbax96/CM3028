<?php
/**
 * Created by PhpStorm.
 * User: 1408721
 * Date: 12/12/2016
 * Time: 14:37
 */
session_start();
$accesslevel = $_COOKIE['access_cookie'];

echo "Successfully logged in<br/>";
echo $accesslevel;