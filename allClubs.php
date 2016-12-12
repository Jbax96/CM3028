<?php
echo '<link rel="stylesheet" type="text/css" href="style.css"></head>';
include ("Dbconnect.php");

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

<head>
    <div class="container">
        <div class="jumbotron">
            <h1>Bootstrap tutorial</h1>
            <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
                responsive, mobile-first projects on the web.</p>
        </div>
        <p>This is some text</p>
        <p>This is some more text</p>
    </div>
</head>
