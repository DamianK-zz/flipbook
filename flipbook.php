<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Offerts</title>
<!-- TODO: test -->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <!-- required files for booklet -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js" type="text/javascript"></script>  
    <script src="booklet/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="booklet/jquery.booklet.latest.js" type="text/javascript"></script>
    <link href="booklet/jquery.booklet.latest.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />

    <style type="text/css">
        body {background:#ccc; font:normal 12px/1.2 arial, verdana, sans-serif;}
    </style>

	<script type="text/javascript">
	    $(function () {		
	        $("#mybook").booklet();
	    });
    </script>

</head>
<body>
	<header>
		<h1>My Flipbook</h1>
	</header>
	<section>
	    <div id="mybook">
<!-- $i has the number of pages -->
	    	<?php
	    	for ($i = 1; $i <= 16; $i++) {
	        	echo '<div title="page ' .$i. '1">';
	            echo '<h3>Page ' .$i. '</h3>';
		    	echo '<img src="images/' .date("Y-m-d"). '-' .$i.'.jpg"></img>';
		    	echo '</div>';
	        }
	        ?>
	        </div>
	    </div>
	</section>
	<footer></footer>
</body>
</html>