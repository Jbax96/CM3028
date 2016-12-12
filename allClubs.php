<?php

include ("Dbconnect.php");

//$query = mysqli_query("SELECT clubName, clubDescription, contactInfo, Genre, AdminID FROM CLUB WHERE clubName={$clubName}, clubDescription={$clubDescription}, contactInfo={$contactInfo}, Genre={$Genre}, AdminID={$AdminID}", $con);
$query=mysqli_query("SELECT * FROM CLUB");

$result =$db-> query($query);

if(!result){
    die('Nothing in result');
}
while($row = $result -> fetch_array()) {
   // echo(
        $clubName = $row['clubName'];
        $clubDescription = $row['clubDescription'];
        $contactInfo = $row['contactInfo'];
        $Genre = $row['Genre'];
        $AdminID = $row['AdminID'];
     echo "Admin: " . $AdminID . "<br>Club Name: " . $clubName . "<br>Description: " . $clubDescription . "<br>Contact: " . $contactInfo . "<br>Genre: " . $Genre;
   // );
}

$result->close();
$db->close();

?>