<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
session_start(); 
include "user.php";
$_SESSION['staffName']=$_POST['staffName'];  
$_SESSION['staffPassword']=$_POST['staffPassword'];  
$_SESSION['curTime']=time('G:i:sa');//get the login time


// username and password sent from form 
$staffName=$_POST['staffName']; 
$staffPassword=$_POST['staffPassword']; 


$isValidUser = validatePassword($staffName,$staffPassword);

if($isValidUser){
		header("location:../dashboard.php"); // redirect to admin page
	}
else {
	echo "<script>alert('Wrong username or password');</script>";
	header("refresh:1; url=index.php" );
	}
?>
