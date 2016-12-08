<?php
include ("Dbconnect.php");
$clubName = $_POST["clubname"];
$contactDetails = $_POST["contactusdetails"];
$adminID = $_POST["adminusername"];
$clubGenre = $_POST["clubgenre"];
$clubDescription = $_POST["clubdescription"];
$clubID =  rand(100000,999999);

while (mysql_num_rows($query) != 0)
{
    $query = mysql_query("SELECT ClubID FROM CLUB WHERE ClubID=$clubID", $con);

    $clubID = rand(100000,999999);
}
if( mysql_num_rows($query) != 0){
    echo "Club Name already exists";
}
else {
    $sql = "INSERT INTO CLUB (ClubID ,AdminID, clubName, clubDescription, contactInfo, Genre) VALUES ( '$clubId,'$adminID', '$clubName', '$clubDescription', '$contactDetails', '$Genre')";
    if (mysqli_query($db, $sql)) {
        echo "New club created successfully";
        header("Location: index.html");
    } else {
        echo "Error: " . $sql . mysqli_error($db);
    }
}

mysqli_close($db);
?>