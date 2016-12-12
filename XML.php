<?php
include ("Dbconnect.php");

$dom = new DOMDocument("1.0");
$node =$dom->createElement("locations");
$parnode = $dom ->appendChild($node);
$query = "SELECT * FROM locations WHERE 1";
$result =$db-> query($query);
if(!result){
    die('Nothing in result');
}

header("Content-type: text/xml");

while($row = $result -> fetch_array()) {
    $node = $dom->createElement("location");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("name", $row['Name']);
    $newnode->setAttribute("startPointLongitude", $row['Start Point Longitude']);
    $newnode->setAttribute("startPointLatitude", $row['Start Point Latitude']);
    $newnode->setAttribute("endPointLongitude", $row['End Point Longitude']);
    $newnode->setAttribute("endPointLatitude", $row['End Point Latitude']);
    $newNode->setAttribute("locationType", $row['Location Type']);
}

$result->close();

$db->close();

echo $dom->saveXML();

?>