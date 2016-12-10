<?php
include ("Dbconnect.php");
$clubName = $_POST["clubname"];
$contactDetails = $_POST["contactusdetails"];
$adminID = $_POST["adminusername"];
$clubGenre = $_POST["clubgenre"];
$clubDescription = $_POST["clubdescription"];
$clubID = rand(100000, 999999);



$query = mysql_query("SELECT clubName FROM CLUB WHERE clubName=$clubName", $con);

$query1 = mysql_query("SELECT ClubID FROM CLUB WHERE ClubID=$clubID", $con);

while(mysql_num_rows($query1) !=0){
    $clubID = rand(100000, 999999);
}

if( mysql_num_rows($query) != 0){
    echo "Club Name already exists";
}
    else {

        $sql = "INSERT INTO CLUB (ClubID, AdminID, clubName, clubDescription, contactInfo, Genre) VALUES ('$clubID' , '$adminID' , '$clubName' , '$clubDescription' , '$contactDetails' , '$Genre')";
        if (mysqli_query($db, $sql)) {
            echo "New club created successfully";
            header("Location: index.html");
        } else {
            echo "Error: " . $sql . mysqli_error($db);
        }
    }

mysqli_close($db);
?>