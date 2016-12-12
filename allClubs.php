<head>
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">More Clubs</h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">More Clubs</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
</head>

<?php
echo '<link rel="stylesheet" type="text/css" href="modern-business.css"></head>';
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