<!--
Author: Camden I. Wagner
File: registration.php
-->

<!DOCTYPE html>
<html>
<head>
	<!-- Website Title & Description -->
	<title>Tuition and Registration</title>
	<meta name="description" content="">

	<link rel="shortcut icon" href="img/e300.ico" type="e300/ico" />

	<!-- Mobile viewport optimized -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Bootstrap CSS -->
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../includes/css/bootstrap-glyphicons.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="../includes/css/styles.css" rel="stylesheet">

	<!-- including FireBase script -->
	<script src="https://cdn.firebase.com/js/client/2.2.9/firebase.js"></script>

	<!-- Include Modernizr in the head, before any other Javascript -->
	<script src="../includes/js/modernizr-2.6.2.min.js"></script>
</head>
<body>
	<div class="background">
		<!-- Layout -->
		<div class="container" id="main">
			
			<?php include './header.php';?>

			<hr>
			<hr>

			<center><img src="../img/banner.jpg"></center>
			<hr>
			<center><h1>Tuition and Registration</h1></center>

			<hr>

			<center><h3>Elite 300 Soccer Academy & Elite 300 Juniors Tuition:</h3></center>

			<div id="reg_1">
				<img src="./img/teamshot_1.jpg" class="pull-right" style="margin-top:40px; margin-left:40px;">

				<h3><b>Tuition</b></h3>
				<h4>Overnight Camper: $645</h4>
				<h4>Commuter: $525</h4>
				<h5>* This includes room and meals, all training and match play, the exclusive Elite 300 College Soccer Recruiting Seminar & the exclusive Elite 300 Sports Psychology Seminar, and the exclusive Elite 300 Soccer Academy uniform.</h5>

				<h3><b>Airport Shuttle</b></h3>
				<a href="https://thriva.activenetwork.com/Reg4/Form.aspx?IDTD=3707797&RF=11711306"><img src="./img/register_button300x75.png" class="pull-right" style="margin-right:30px;"></a>
				<h4>One Way: $25</h4>
				<h4>Round Trip: $35</h4>

				<h3><b>All Registrations</b></h3>
				<h4>$200 deposit (NON-REFUNDABLE)</h4>
				<h4>Balance will be due on [tbd]</h4>

				<h3><b>For Group & Team Discounts</b></h3>
				<h4 style="margin-right:650px;">Please contact Eric Wagner at <i>ewagner1@swarthmore.edu</i> or at 610-690-6882.</h4>
			</div>
			<hr>
			<div id="reg_2">
				<h3><b>Refund Policy</b></h3>
				<h4>$200 deposit is non-refundable</h4>
				<h4>Prior to June 1, we will refund all monies above and beyond $200 non-refundable deposit.</h4>
				<h4>After June 1, no refunds will be made.</h4>
			</div>
			<div class="carousel slide" id="slideshow">
			</div><!-- end slideshow -->

			<div class="row" id="info">
				<div class="col-sm-6">
					
				</div><!-- end col-sm-6 -->

				<div class="col-sm-6">
					
				</div><!-- end col-sm-6 -->
			</div><!-- end info -->


		</div><!-- end container -->

	</div><!--end background -->

	<?php include './footer.php';?>

	<!-- All Javascript at the bottom of the page for faster page loading -->
	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	<!-- Bootstrap JS -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- Custom JS -->
	<script src="includes/js/script.js"></script>

</body>
</html>

