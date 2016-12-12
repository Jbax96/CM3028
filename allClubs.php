<?php

include ("Dbconnect.php");

$queryName = mysql_query("SELECT clubName FROM CLUB WHERE clubName=$clubName", $con);
$queryDescription = mysql_query("SELECT clubDescription FROM CLUB WHERE clubDescription=$clubDescription", $con);
$queryContact = mysql_query("SELECT contactInfo FROM CLUB WHERE contactInfo=$contactInfo", $con);
$queryGenre = mysql_query("SELECT Genre FROM CLUB WHERE Genre=$genre", $con);
$queryAdmin = mysql_query("SELECT AdminID FROM CLUB WHERE AdminID=$AdminID", $con);

$query = mysql_query("SELECT clubName FROM CLUB WHERE clubName='Junior Jazzercise'", $con);

$dom = new DOMDocument("1.0");
$node =$dom->createElement("locations");
$parnode = $dom ->appendChild($node);
//$query = "SELECT * FROM locations WHERE 1";
$result =$db-> query($query);

if(!result){
    die('Nothing in result');
}

header("Content-type: text/xml");
while($row = $result -> fetch_array()) {
    $node = $dom->createElement("location");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("AdminID", $row['Name']);
    $newnode->setAttribute("clubName", $row['Club Name']);
    $newnode->setAttribute("Description", $row['Club Description']);
    $newnode->setAttribute("contactInfo", $row['Contact Information']);
    $newnode->setAttribute("Genre", $row['Genre']);
}

$result->close();
$db->close();
echo $dom->saveXML();
?>