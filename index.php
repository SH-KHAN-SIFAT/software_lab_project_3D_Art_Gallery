<?php
include("connection.php");
session_start(); // Start the session
?>
<!DOCTYPE HTML>
<html>

<head>
   <title>Art Gallery</title>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="stylesheet" href="assets/css/main.css" />
   <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
   <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>
   <!-- Header -->
   <header id="header" class="alt">
      <div class="logo"><a href="index.php"><span>Art Gallery</span></a></div>
      <ul class="nav navbar-nav custom-navbar">
         <li class="active"><a href="index.php">Home</a></li>
         <li><a href="http://localhost/3D ART GALLERY/virtual_tour/">Demo Virtual Tour</a></li>
         <li><a href="index.php?page=customer_register">User Register</a></li>
         <li><a href="index.php?page=seller_register">Artist Register</a></li>


      </ul>
      <a href="#menu">
         <p class="custom-para">Login</p>
      </a>
   </header>
   <!-- Nav -->
   <nav id="menu">
      <ul class="links">
         <li><a href="index.php?page=customer_login">USER</a></li>
         <li><a href="index.php?page=admin_login">Admin</a></li>
         <li><a href="index.php?page=seller_login">ARTIST</a></li>


      </ul>
   </nav>
   <section>
      <?php
      if (isset($_GET['page'])) {

         $page_name = $_GET['page'];

         include("login_register/" . $page_name . ".php");

      } else {

         include("login_register/main.php");

      }

      ?>
   </section>

   <!-- Footer -->
   <footer id="footer">
      <div class="container">
         <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
         </ul>
      </div>
      <div class="copyright">
         <div class="footer text-center">Contact us for further queries</div>
         &copy; All rights reserved.
      </div>
   </footer>
   <!-- Scripts -->
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/jquery.scrollex.min.js"></script>
   <script src="assets/js/skel.min.js"></script>
   <script src="assets/js/util.js"></script>
   <script src="assets/js/main.js"></script>
   <script src="js/three.js"></script>
   <script src="js/main.js"></script>
</body>

</html>