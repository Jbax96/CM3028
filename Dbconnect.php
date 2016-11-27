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

$db = mysqli_connect(DB_SERVER,DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if($db ->connect_errno){
    die('ConnectFailed['.$db->connect_error.'}');
}

//SQL To Create Table USERS
$sql = "CREATE TABLE USERS (
UserID CHAR(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Password VARCHAR(30) NOT NULL,
emailAddress VARCHAR(30) NOT NULL,
AccessID VARCHAR(50),
)";

//SQL To Create Table ACCESS RIGHTS
$sql = "CREATE TABLE ACCESS RIGHTS(
AccessID CHAR(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
description VARCHAR(60) NOT NULL,
)";


//SQL To Create Table CLUB
$sql = "CREATE TABLE CLUB(
ClubID CHAR(6)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
AdminID CHAR(6) UNSIGNED AUTO_INCREMENT FOREIGN KEY,
clubName VARCHAR(30) NOT NULL,
clubDescription VARCHAR(50) NOT NULL,
contactInfo VARCHAR(20) NOT NULL,
Genre VARCHAR(50) NOT NULL
)";

//SQL To Create Table PHOTO
$sql = "CREATE TABLE PHOTO(
PhotoID CHAR(6)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ClubID CHAR(6) UNSIGNED AUTO_INCREMENT FOREIGN KEY,
AdminID CHAR(6) UNSIGNED AUTO_INCREMENT FOREIGN KEY,
photo LONGBLOB NOT NULL,
description VARCHAR(50) NOT NULL
)";

//SQL To Create Table GENRE
$sql = "CREATE TABLE GENRE(
Genre VARCHAR(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ClubID CHAR(6) UNSIGNED AUTO_INCREMENT FOREIGN KEY,
ADMINID CHAR(6) UNSIGNED AUTO_INCREMENT FOREIGN KEY,
description VARCHAR(50) NOT NULL
)";

//SQL To Create Table LOCATIONS
//////////////////////////////////////////////NEED INPUT VALIDATION ON LOCATION TYPE\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
$sql ="CREATE TABLE LOCATIONS(
LocationID CHAR(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
startPoint VARCHAR(10) NOT NULL,
endPoint VARCHAR(10) NOT NULL,
locationType() VARCHAR(20) NOT NULL 
)";
/////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

//SQL To Create Table AREA
$sql ="CREATE TABLE AREA(
AreaID CHAR(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
LocationID CHAR(6) UNSIGNED AUTO_INCREMENT FOREIGN KEY,
name VARCHAR(50) NOT NULL
)";

$sql = "CREATE TABLE GEODATA(
GeoID CHAR(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
LocationID CHAR(6) UNSIGNED AUTO_INCREMENT FOREIGN KEY,
descripion VARCHAR(50) NOT NULL
)";

?>
mysqli_close($db);
)"



