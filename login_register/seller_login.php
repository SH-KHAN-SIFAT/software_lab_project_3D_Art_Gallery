<!--this is form for seller Login-->
<section id="One" class="wrapper style3"  style="
    margin-top: -2%;
">
				<div class="inner">
					<header class="align-center">
						<p>Artist Login</p>
						<h2>Artist Login</h2>
						
					</header>
				</div>
</section>


		<!-- Two -->
			<section id="two" style="
    margin-top: -5%;
" >
				<div class="inner">
					<div class="box">
						<div class="content">
<section>
<div>
<div class="container divform" style="margin-top: 3em;">
	<h2><span class="glyphicon glyphicon-log-in"></span> Artist Login</h2>
	<form action="index.php?page=seller_login" method="post" name="f1">
		<div class="form-group">
			<label for="id">Artist Id / Username:</label>
			<input type="text" class="form-control" id="id" name="id" placeholder="Enter Id">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd" name="pass" placeholder="Enter password">
		</div>
		<br>
		<button type="submit" class="button special" name="sub">Login</button>
	</form>
	</div>
	</div></div>
</div>

</section>
<!--End this is form for seller Login-->
<?php
if ( isset( $_POST[ 'sub' ] ) ) {
	$id = $_POST[ 'id' ];
	$pas = $_POST[ 'pass' ];
	$sql= "select * from seller_info where seller_email='".$id."' and seller_pwd='".$pas."'"; //This  is query for login.
	$result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) {	
    // output data of each row
    $row = mysqli_fetch_assoc($result);

$_SESSION["seller"]=$row["seller_name"];
$_SESSION["sellerid"]=$row["seller_id"];

header('Location:seller/');
} else {
     echo "<script> window.alert('Your input is invalid! Please Enter the Correct Id & Password! ');
	window.location.assign('seller/')
</script>";
}}
mysqli_close($con);
?>

