<?php

$search = $_GET['search'];

$apiUrl = "http://maps.googleapis.com/maps/api/staticmap?";

$center = "center=".$search."";


// print "You searched for ".$search;

// header("Location:index.html");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DIG4503 - Philip Carter Semester Project</title>
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="css/reset.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<!-- <script src="js/foo.js" type="text/javascript"></script> -->
</head>

<body>
	
    <div id='wrapper'>
    	<div id='branding'>
        	<h1>43maps.com</h1>
        </div>
        <div id='searchBox'>
            <form action="staticmap.php" method="get">
            	<fieldset>
                <legend>Where would you like to go?</legend>
                    <input type="text" name="search" />
                    <input type="submit" value="Go!" />
                </fieldset>
            </form>
        </div>
        <div id='result'>
        	<img src="http://maps.googleapis.com/maps/api/staticmap?center=<?= $search ?>&zoom=14&size=640x640&maptype=roadmap&sensor=false" alt="Oops!&nbsp;The&nbsp;map&nbsp;data&nbsp;failed&nbsp;to&nbsp;load!" /> ?>
        </div>
    </div>
</body>
</html>
