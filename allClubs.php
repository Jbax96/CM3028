<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>
    </div>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="img/sportlethen.png"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="map.html">Maps</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="login.html">Log In</a>
                    </li>
                    <li>
                        <a href="signup.html">Sign Up</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clubs <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="addclub.html">Add Club</a>
                            </li>
                            <li>
                                <a href="swimmingclubs.html">Swimming Clubs</a>
                            </li>
                            <li>
                                <a href="athleticclubs.html">Athletic Clubs</a>
                            </li>
                            <li>
                                <a href="walkingclubs.html">Walking Clubs</a>
                            </li>
                            <li>
                                <a href="Clubs.html">More Clubs...</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</head>

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