<?php

include ("Dbconnect.php");

$query = mysqli_query("SELECT clubName, clubDescription, contactInfo, Genre, AdminID FROM CLUB WHERE clubName={$clubName}, clubDescription={$clubDescription}, contactInfo={$contactInfo}, Genre={$Genre}, AdminID={$AdminID}", $con);

$result =$db-> query($query);

if(!result){
    die('Nothing in result');
}

header("Content-type: text/xml");
while($row = $result -> fetch_array()) {
    echo($query);
}

$result->close();
$db->close();

?>