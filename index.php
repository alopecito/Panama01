<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
include("dbconnect.php");
?>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="panama, condos, investments" />
        
        
        <title>Welcome to International Dreams</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        	


	<link rel="stylesheet" href="css/layout.css">
	

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        
        
    </head>

    <body>

        <div class="videoContainer">
            <video autoplay muted loop="true" width="1280" height="720" id="myVideo">
                <source src="videos/video3.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
        </div>
        <div class="container">
            <?php
            include("header.php");
            // check to see if user is visiting a page other than the home page
            if (!isset($_GET['page'])) {
                ?><div class="banner"><img src="images/Panama.png" alt="Beautiful Panama" /></div>
                <?php
            }
            ?>

            <div class="maincontent">
                <?php
                if (!isset($_GET['page'])) {
                    include("home.php");
                } else {
                    $page = $_GET['page'];
                    include("$page.php");
                }
                ?>
            </div>

            <div class="footer">
                <?php
                include("footer.php");
                ?>
            </div>


        </div>

    </body>
</html>




