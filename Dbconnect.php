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

echo "Connected successfully";


//SQL To Create Table USERS
$sql = "CREATE TABLE 'USERS' (
UserID VARCHAR(15) NOT NULL,
Password VARCHAR(30) NOT NULL,
emailAddress VARCHAR(50) NOT NULL,
AccessID VARCHAR(6),
PRIMARY KEY('UserID')
)";

//SQL To Create Table ACCESS RIGHTS
$sql = "CREATE TABLE 'ACCESSRIGHTS'(
AccessID CHAR(6) NOT NULL,
UserID VARCHAR(15) NOT NULL,
description VARCHAR(60) NOT NULL,
PRIMARY KEY('AccessID'),
CONSTRAINT LOCATION_ibfk_1 FOREIGN KEY (UserID) REFERENCES USERS (UserID)
)";

//SQL To Create Table CLUB
$sql = "CREATE TABLE 'CLUB'(
ClubID CHAR(6) NOT NULL,
AdminID VARCHAR(15) NOT NULL,
clubName VARCHAR(30) NOT NULL,
clubDescription VARCHAR(50) NOT NULL,
contactInfo VARCHAR(20) NOT NULL,
Genre VARCHAR(50) NOT NULL,
PRIMARY KEY ('ClubID'),
CONSTRAINT LOCATION_ibfk_2 FOREiGN KEY (AdminID) REFERENCES USERS (UserID)
)";

//SQL To Create Table PHOTO
$sql = "CREATE TABLE 'PHOTO'(
PhotoID CHAR(6)NOT NULL,
ClubID CHAR(6) NOT NULL,
AdminID VARCHAR(15) NOT NULL,
photo LONGBLOB NOT NULL,
description VARCHAR(50) NOT NULL,
PRIMARY KEY ('PhotoID'),
CONSTRAINT LOCATION_ibfk_3  FOREIGN KEY (ClubID) REFERENCES LOCATIONS (LocationID),
CONSTRAINT LOCATION_ibfk_4 FOREIGN KEY (AdminID) REFERENCES USERS(UserID)
)";

//SQL To Create Table GENRE
$sql = "CREATE TABLE 'GENRE'(
Genre VARCHAR(20) NOT NULL ,
ClubID CHAR(6) NOT NULL,
name VARCHAR(50) NOT NULL,
AdminID VARCHAR(15) NOT NULL,
name VARCHAR(50) NOT NULL,
description VARCHAR(50) NOT NULL,
PRIMARY KEY ('Genre'),
CONSTRAINT LOCATION_ibfk_5 FOREIGN KEY (LocationID) REFERENCES LOCATIONS (LocationID),
CONSTRAINT LOCATION_ibfk_6  FOREIGN KEY (UserID) REFERENCES USERS (USerID)
)";

//SQL To Create Table LOCATIONS

$sql ="CREATE TABLE 'LOCATIONS'(
LocationID CHAR(6) NOT NULL,
name VARCHAR(30) NOT NULL,
startPoint VARCHAR(10) NOT NULL,
endPoint VARCHAR(10) NOT NULL,
locationType() VARCHAR(20) NOT NULL ,
PRIMARY KEY('LocationID')
)
ALTER TABLE<LOCATIONS> ADD CONSTRAINT 
my_constraint CHECK (locationType = 'Viewpoint' OR locationType = 'Routes' OR locationType = 'Landmarks')
";

//SQL To Create Table AREA
$sql ="CREATE TABLE 'AREA'(
AreaID CHAR(6) NOT NULL ,
LocationID CHAR(6) NOT NULL,
name VARCHAR(50) NOT NULL,
description VARCHAR(50) NOT NULL,
PRIMARY KEY ('AreaID'),
KEY LocationID (LocationID),
CONSTRAINT LOCATION_ibfk_7 FOREIGN KEY (LocationID) REFERENCES LOCATIONS (LocationID)
)";


$sql = "CREATE TABLE 'GEODATA'(
GeoID CHAR(6) NOT NULL,
LocationID CHAR(6) NOT NULL,
description VARCHAR(50) NOT NULL,
PRIMARY KEY ('GeoID'),
CONSTRAINT LOCATION_ibfk_8 FOREIGN KEY (LocationID) REFERENCES LOCATIONS (LocationID)
)";
//mysqli_close($db);
//)"
?>




