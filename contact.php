<?php

//variables
$name = $from = $message = "";

if (isset($POST['submit'])) {
  $name = test_input($_POST["name"]);
  $from = test_input($_POST["email"]);
  //$message = test_input($_POST["message"]);

  $to = "chad.jayhawk@gmail.com";
  $subject = "Inquiry about URJH";
  $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . test_input($_POST['message']);
  $headers = "From:" . $from;
  mail($to,$subject,$message,$headers);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 ?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>URJH &mdash; KU</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Chad Uhl, FreeHTML5.co" />

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FreeHTML5.co

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.png">

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div id="fh5co-wrap">
		<header id="fh5co-header">
			<div class="container">
				<nav class="fh5co-main-nav">
					<ul>
						<li><a href="index.html"><span>Home</span></a></li>
						<li><a href="about.html"><span>About</span></a></li>
						<li><a href="issue.html"><span>Current Issue</span></a></li>
						<li><a href="submissions.html"><span>Submission Process</span></a></li>
						<li><a href="review.html"><span>Review Process</span></a></li>
						<li><a href="submit.html"><span>Submit</span></a></li>
						<li><a href="faq.html"><span>FAQ</span></a></li>
						<li class="fh5co-active"><a href="contact.php"><span>Contact</span></a></li>
					</ul>
				</nav>
			</div>
		</header>

		<div class="fh5co-hero" style="background-image: url(images/campus/wescoe.JPG);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1 class="text-center">Contact Us</h1>
							<p>We'd love to chat.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h2>Contact Info</h2>
						<p>You can visit us in our office, 3611 Wescoe Hall, on Monday and Wednesday 2-4PM or anytime the door is open.</p>

						<p>Wescoe Hall 3611<br>1445 Jayhawk Blvd.<br> Lawrence, KS 66045</p>
						<p><a href="#">urjh@ku.edu</a></p>
						<p><a href="#">+785 864 9474</a></p>
					</div>
					<div class="col-md-6 col-md-push-1">
						<form action="" method="post">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name" name="name">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email" name="email">
							</div>
							<div class="form-group">
								<textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Message" name="message"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" value="Send Message" class="btn btn-primary btn-md" name="submit">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="map"></div>

	</div> <!-- END fh5co-wrap -->


	<footer id="fh5co-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3>About Us</h3>
					<p>The <i>Undergraduate Research Journal for the Humanities</i> is a student-run journal for University of Kansas Humanities students. Its primary goal is to provide a venue for undergraduates to publish their research in the Humanities.</p>
				</div>
				<div class="col-md-3 col-md-push-1">
					<h3>Quick Links</h3>
					<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Products</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-md-push-1">
					<h3>Follow Us</h3>
					<ul class="fh5co-social">
						<li><a href="#"><i class="icon-twitter"></i> <span>Twitter</span></a></li>
						<li><a href="#"><i class="icon-facebook"></i> <span>Facebook</span></a></li>
						<li><a href="#"><i class="icon-instagram"></i> <span>Instagram</span></a></li>
						<li><a href="#"><i class="icon-google"></i> <span>Google Plus</span></a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 fh5co-copyright text-center">
					<p><small>&copy; 2016 Free HTML5 Simple. All Rights Reserved. </small> <small>Made with care by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.com" target="_blank">Unsplash</a></small></p>
				</div>
			</div>
		</div>
	</footer>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>
