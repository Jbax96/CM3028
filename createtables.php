<?php
/**
 * Created by PhpStorm.
 * User: 1408721
 * Date: 01/12/2016
 * Time: 12:01
 */

include ("Dbconnect.php");

echo "help pls <br>";

/* I changed the variable names to follow camelCase because they were all over the place
 * and not consistent. ID is still capitalised as though it is two separate letters
 * rather than one word.
 */

//SQL To Create Table USERS
$sql = "CREATE TABLE USERS (
userID VARCHAR(15) AUTO_INCREMENT PRIMARY KEY, 
password VARCHAR(30) NOT NULL,
emailAddress VARCHAR(50) NOT NULL,
accessID VARCHAR(6)
)";

if (mysqli_query($db, $sql)) {
    echo "USERS table created successfully";
} else {
    echo "Error creating USERS table: " . mysqli_error($db);
}

#This is unfinished

//SQL To Create Table ACCESS RIGHTS
$sql = "CREATE TABLE ACCESSRIGHTS(
accessID CHAR(6)  AUTO_INCREMENT PRIMARY KEY,
userID VARCHAR(15) NOT NULL,
FOREIGN KEY fk_UserID(userID)
   REFERENCES USERS(userID)
   ON UPDATE CASCADE
   ON DELETE RESTRICT,
description VARCHAR(60) NOT NULL
)";

//SQL To Create Table CLUB
$sql = "CREATE TABLE CLUB(
clubID CHAR(6)AUTO_INCREMENT PRIMARY KEY,
adminID VARCHAR(15) NOT NULL,
FOREIGN KEY fk_admin(adminID)
   REFERENCES USERS(userID)
   ON UPDATE CASCADE
   ON DELETE RESTRICT,
clubName VARCHAR(30) NOT NULL,
clubDescription VARCHAR(50) NOT NULL,
contactInfo VARCHAR(20) NOT NULL,
genre VARCHAR(50) NOT NULL
)";

//SQL To Create Table PHOTO
$sql = "CREATE TABLE PHOTO(
photoID CHAR(6) AUTO_INCREMENT PRIMARY KEY,
clubID CHAR(6) NOT NULL,
FOREIGN KEY fk_club(clubID)
   REFERENCES CLUB(clubID)
   ON UPDATE CASCADE
   ON DELETE RESTRICT,
adminID VARCHAR(15) NOT NULL,
FOREIGN KEY fk_admin(adminID)
   REFERENCES USERS(userID)
   ON UPDATE CASCADE
   ON DELETE RESTRICT,
photo LONGBLOB NOT NULL,
description VARCHAR(50) NOT NULL
)";

//SQL To Create Table GENRE
$sql = "CREATE TABLE GENRE(
genre VARCHAR(20)  AUTO_INCREMENT PRIMARY KEY,
clubID CHAR(6) NOT NULL,
FOREIGN KEY fk_club(clubID)
   REFERENCES CLUB(clubID)
   ON UPDATE CASCADE
   ON DELETE RESTRICT,
name VARCHAR(50) NOT NULL,
adminID VARCHAR(15) NOT NULL,
FOREIGN KEY fk_admin(adminID)
   REFERENCES USERS(userID)
   ON UPDATE CASCADE
   ON DELETE RESTRICT,
name VARCHAR(50) NOT NULL,
description VARCHAR(50) NOT NULL
)";

//SQL To Create Table LOCATIONS
$sql ="CREATE TABLE LOCATIONS(
locationID CHAR(6)  AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
startPoint VARCHAR(10) NOT NULL,
endPoint VARCHAR(10) NOT NULL,
locationType VARCHAR(20) NOT NULL,
CONSTRAINT locationType_constraint CHECK (locationType = 'Viewpoint' OR locationType = 'Routes' OR locationType = 'Landmarks')
)";

//SQL To Create Table AREA
$sql ="CREATE TABLE AREA(
areaID CHAR(6)  AUTO_INCREMENT PRIMARY KEY,
locationID CHAR(6) NOT NULL,
FOREIGN KEY fk_location(locationID)
   REFERENCES LOCATIONS(locationID)
   ON UPDATE CASCADE
   ON DELETE RESTRICT,
name VARCHAR(50) NOT NULL,
description VARCHAR(50) NOT NULL  
)";

//SQL To Create Table GEODATA
$sql = "CREATE TABLE GEODATA(
geoID CHAR(6) AUTO_INCREMENT PRIMARY KEY,
locationID CHAR(6) NOT NULL,
 FOREIGN KEY fk_location(locationID)
   REFERENCES LOCATIONS(locationID)
   ON UPDATE CASCADE
   ON DELETE RESTRICT,
description VARCHAR(50) NOT NULL
)";

echo "All tables created(?)<br>";

mysqli_close($db);

?>