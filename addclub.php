<?php
include ("Dbconnect.php");
$clubName = $_POST["clubname"];
$contactDetails = $_POST["contactusdetails"];
$adminID = $_POST["adminusername"];
$clubGenre = $_POST["clubgenre"];
$clubDescription = $_POST["clubdescription"];
$clubID = 100000;
$clubID = $clubID + 1;

if( mysql_num_rows($query) != 0){
    echo "Club Name already exists";
}
else {
    $sql = "INSERT INTO CLUB ( ClubID , AdminID, clubName, clubDescription, contactInfo, Genre) VALUES ( '$clubID,'$adminID', '$clubName', '$clubDescription', '$contactDetails', '$clubGenre')";
    if (mysqli_query($db, $sql)) {
        echo "New club created successfully";
        header("Location: index.html");
    } else {
        echo "Error: " . $sql . mysqli_error($db);
    }
}

mysqli_close($db);
?>