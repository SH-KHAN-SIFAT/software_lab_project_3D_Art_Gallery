<?php
include("../connection.php");
session_start(); // Start the session
$a=$_SESSION["sellerid"];
?>
<!doctype html>
<html lang="en" class="gr__localhost" style="
    margin-top: 67px;
    background-color: GREEN;
">
<head>
<title>Seller - <?php echo $_SESSION["seller"]; ?> - Art Gallery </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="../assets/css/main.css" />
<!-- jQuery library -->
<script src="../boots/js/jquery.js"></script>
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
<!-- Latest compiled JavaScript -->

<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

</head>


<header>
<nav class="#header">

  <!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.php"> <span>Art Gallery</span></a></div>
				<a href="#menu"><p class="custom-para">Action</p></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="view_booking_detail.php">View Bookings Details </a></li>
					<li><a href="view_payment_detail.php">View Payments Details </a></li>
					<li><a href="add_product.php">Add Arts</a></li>
					<li><a href="upload_exhibition_art.html">Add Exhibition Arts</a></li>
					<li><a href="http://localhost/3D ART GALLERY/vr_art/">Exhibition</a></li>
					<li><a href="add_course.php">Add Course</a></li>
					<li><a href="manage_feedback.php">Manage Feedbacks</a></li>
					<li><a class="a button special" href="seller_logout.php?id=<?php echo $a;?>">Log Out</a></li>
				</ul>
			</nav>
 
</nav>
</header>
<body>
