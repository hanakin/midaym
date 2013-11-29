<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>PHPBB | Mino</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<link rel="stylesheet" href="theme/stylesheet.css">

		<script src="assets/js/vendor/html5-3.6-respond-1.1.0.min"></script>
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<div class="container">
			<header class="header">
				<?php include("includes/navbar.php"); ?>
			</header>
			<div class="main">
				<?php include("includes/breadcrumb.php"); ?>
				<?php include("includes/toolbar.php"); ?>
				<?php include("includes/forumlist.php"); ?>
				<?php include("includes/info.php"); ?>
			</div>
			<footer class="footer text-center">
				<?php include("includes/copyright.php"); ?>
			</footer>

		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
		<script src="assets/js/tooltip.js"></script>
		<script src="assets/js/plugins.js"></script>
		<script src="assets/js/main.js"></script>

		<script>
			var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>
	</body>
</html>
