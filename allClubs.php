<?php
//display all clubs
include ("Dbconnect.php");

$query = mysqli_query("SELECT clubName, clubDescription, contactInfo, Genre, AdminID FROM CLUB WHERE clubName={$clubName}, clubDescription={$clubDescription}, contactInfo={$contactInfo}, Genre={$Genre}, AdminID={$AdminID}", $con);

$result =$db-> query($query);

if(!result){
    die('Nothing in result');
}
while($row = $result -> fetch_array()) {
    echo($query);
}

$result->close();
$db->close();

?>