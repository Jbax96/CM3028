<?php

include ("Dbconnect.php");

$query = mysqli_query("SELECT clubName, clubDescription, contactInfo, Genre, AdminID FROM CLUB WHERE clubName={$clubName}, clubDescription={$clubDescription}, contactInfo={$contactInfo}, Genre={$Genre}, AdminID={$AdminID}", $con);
//$query=mysqli_query("SELECT * FROM CLUB");

$result =$db-> query($query);

if(!result){
    die('Nothing in result');
}

while($row = $result -> fetch_array()) {
   // echo(
    $AdminID = $row['AdminID'];
    $clubName = $row['clubName'];
    $clubDescription = $row['clubDescription'];
    $contactInfo = $row['contactInfo'];
    $Genre = $row['Genre'];

    echo "Admin: " . $AdminID . "<br>Club Name: " . $clubName . "<br>Description: " . $clubDescription . "<br>Contact: " . $contactInfo . "<br>Genre: " . $Genre . "<br>meme";
    echo "<form><input type='text' value='meme'";
    // );
}

$result->close();
$db->close();
?>