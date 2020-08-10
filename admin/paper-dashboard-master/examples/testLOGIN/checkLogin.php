<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
session_start(); 
include "user.php";
$_SESSION['adminName']=$_POST['adminName'];  
$_SESSION['adminPassword']=$_POST['adminPassword'];  
$_SESSION['curTime']=time('G:i:sa');//get the login time


// username and password sent from form 
$adminName=$_POST['adminName']; 
$adminPassword=$_POST['adminPassword']; 


$isValidUser = validatePassword($adminName,$adminPassword);

if($isValidUser)
	{
		header("location:../dashboard.php"); // redirect to admin page
	}
else {
	echo "<script>alert('Wrong username or password');</script>";
	}
?>
