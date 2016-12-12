<?php

include ("Dbconnect.php");

//$query = mysqli_query("SELECT clubName, clubDescription, contactInfo, Genre, AdminID FROM CLUB WHERE clubName={$clubName}, clubDescription={$clubDescription}, contactInfo={$contactInfo}, Genre={$Genre}, AdminID={$AdminID}", $con);
$query="SELECT * FROM CLUB";

$result =$db-> query($query);

if(!result){
    die('Nothing in result');
}
echo "<h1> List of Clubs</h1>";
while($row = $result -> fetch_array()) {
    $AdminID = $row['AdminID'];
    $clubName = $row['clubName'];
    $clubDescription = $row['clubDescription'];
    $contactInfo = $row['contactInfo'];
    $Genre = $row['Genre'];

    echo "<p>" . $AdminID . " " . $clubName . " " . $clubDescription . " " . $contactInfo . " " . $Genre . " ";
}

$result->close();
$db->close();
?>