<head>
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