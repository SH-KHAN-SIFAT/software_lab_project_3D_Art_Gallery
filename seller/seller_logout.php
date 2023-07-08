<?php
session_start(); 
if(isset($_GET['id'])){
$_SESSION["sellerid"]=="";
unset($_SESSION["sellerid"]); 	// remove  session variables/
header('Location:../seller/');
}
mysqli_close($con);
?>