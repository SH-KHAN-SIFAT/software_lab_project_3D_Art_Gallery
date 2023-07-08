<!--this is form for Seller registration-->
<section id="One" class="wrapper style3"  style="
    margin-top: -2%;
">
				<div class="inner">
					<header class="align-center">
						<p>Artist Registration</p>
						<h2>Artist Registration</h2>
						
					</header>
				</div>
</section>


		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">


	
	<form action="" method="post" name="f1">
		<div class="form-group">
			<label for="first">First Name:</label>
			<input type="text" class="form-control" id="first" name="first" placeholder="Enter First Name" required>
		</div>
		<div class="form-group"> 
			<label for="last">Last Name:</label>
			<input type="text" class="form-control" id="last" name="last" placeholder="Enter Last Name" required>
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" name="mail" placeholder="Enter email" required>
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd" name="pass" placeholder="Enter password" required>
		</div>
		<div class="form-group">
			<label for="sel1">Sex:</label>
			<select class="form-control" id="sel1" name="sex" required>
				<option value="" hidden>------Select------</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
			</select>
		</div>
		<div class="form-group">
			<label for="mob">Mobile Number:</label>
			<input type="text" class="form-control" id="mob" name="num" placeholder="Enter Mobile Number" required  pattern="\d*" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "11">
		</div>
		<div class="form-group">
			<label for="nid">NID Number:</label>
			<input type="text" class="form-control" id="nid" name="numbers" placeholder="Enter NID Number" required  pattern="\d*" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "17">
		</div>
		<div class="form-group">
			<label for="add">Complete Address:</label>
			<input type="text" class="form-control" id="address" name="add" placeholder="Enter Address" required>
		</div>
		<div class="form-group">
			<label for="st">State:</label>
			<input type="text" class="form-control" id="st" name="stat" placeholder="Enter State" required>
		</div>
		<div class="form-group">
			<label for="pl">Country:</label>
			<input type="text" class="form-control" id="pl" name="place" placeholder="Enter Country" required>
		</div>
        <b/>
        <b/>
		
		<button type="submit" class="button special" name="sub" >Register</button>
	</form>
</div>
					</div>
				</div>
			</section>
<!--End this is form for seller registration-->
<?php
if ( isset($_POST['sub'])){
	$fn=$_POST['first'];
	$ln=$_POST['last'];
	$mail=$_POST['mail'];
	$pass=$_POST['pass'];
	$nid=$_POST['numbers'];
	$sex=$_POST['sex'];
	$num=$_POST['num'];
	$add=$_POST['add'];
	$state=$_POST['stat'];
	$place=$_POST['place'];
	$sql = "INSERT INTO seller_info (seller_pwd, seller_email, seller_Fname, seller_Lname, seller_NID, seller_sex, seller_phone, seller_state, seller_place, seller_address) VALUES ('$pass', '$mail', '$fn', '$ln', '$nid', '$sex', '$num', '$state', '$place', '$add')"; //this is query for registration
	if (mysqli_query($con, $sql)) 
		{
	$sellerid=mysqli_insert_id($con);
    	$sql1= "select * from seller_info where seller_email='".$mail."' and seller_pwd='".$pass."'"; //This  is query for login.
	$result = mysqli_query($con, $sql1);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    if($row = mysqli_fetch_assoc($result))
{
$_SESSION["sellerid"]=$row["seller_id"];
$_SESSION["name"]=$row["seller_Fname"];
}
		echo "<script>window.location.assign('seller/')</script>";
} 
} 
	else {
    echo "<script>alert('This Email Id has used. Please use other Email ID');
	window.location.assign('index.php?page=seller_register')</script>";
}	
}
mysqli_close($con);
	?>
