<?php include "inc/getinstagram.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="win & awesome">

	<title>
	  
	    WIN & AWESOME
	  
	</title>

	<!-- Bootstrap core CSS -->
	<link href="styles.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Favicons -->

  </head>
  <body style="background-image: url('<?php echo getImageAsString() ?>')">

	<div id="logo">
		<img src="img/waa-logo.png" alt="Win & Awesome" />
	</div>

	<footer>
		
	<p>A WIN & AWESOME production. Image via <?php echo getImageAttributionLink() ?></p>

	</footer>

	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="js/jquery.parallax.min.js"></script>
	<script src="js/winandawesome.min.js"></script>

  </body>
  </html>
