<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width = device-width, initial-scale=1">
		<!-- These three meta tags have to come before any other head tags. PHP
		and other languages can be put before them though. -->

		<title>Bootstrap Base Template</title>
		<!--Calling in the Bootstrap style template, and theme.
		Base style gives us the responsive ability, theme gives us
		access to the stylistic elements of Bootstrap.--> 
		<link rel="stylesheet" type="text/css" href="./_/css/bootstrap.min.css"></link>
		<link rel="stylesheet" type="text/css" href="./_/css/bootstrap-theme.min.css"></link>
		<!--IE10 viewport hack for Surface/desktop Windows 8 bug-->
		<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

		<!--Style sheet for this page, which builds upon the default provided by bootstrap
		"Bootstrap.min.css-->
		<link href="./_/css/reference.css" rel="stylesheet"></link>
		<!--Font Awesome Icons -->
		<script src="https://use.fontawesome.com/aef17e57d0.js"></script>
	</head>
	<body>
		<div class="site-wrapper">
			<div class="site-wrapper-inner">
				<div class="cover-container">
					<div class="inner cover col-md-4">
						<h1>Customer Oriented Websites</h1>
						<a href="https://www.linkedin.com/in/jwgravesjr" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a>
						<a href="https://www.twitter.com/jwgravesjr" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
						<a href="https://plus.google.com/102599508079126783088" target="_blank"><i class="fa fa-google-plus-square fa-2x"></i></a>
						<a href="https://www.github.com/JGravesjr" target="_blank"><i class="fa fa-github-square fa-2x"></i></a>
						<hr>
						<h3>Let's Get Started</h3>
						<?php include "./_/components/php/ctapromo.php"; ?>
						<h3>Search Engine Optimized</h3>
						<p>All websites are built with Google and Bing best practices in mind, guaranteeing customers find you when they need you.</p>
						<h3>Responsively Designed</h3>
						<p>As of 2015, 68% of US Adults have a smartphone and 43% have a tablet, my websites make sure all visitors can comfortably view your website and buy your products.</p>
						<h3>Focused on Conversion</h3>
						<p>I understand that websites are about making you money and design all websites with business practices in mind. Social Media marketing campaigns are available.</p>
					</div>
					<div class="inner cover col-lg-8">
						<h3>Worpress Templates</h3>
						<a href="showcase.jwgravesjr.io/"><img src=""/></a>
						<a href="presentation.jwgravesjr.io/"><img src=""/></a>
					</div>
				</div>
			</div>
		</div>







		<!-- Required jQuery and javaScript scripts -->
		<!-- ====================================== -->
		<script src="js/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
		<!-- ====================================== -->
	</body>
</html>	
