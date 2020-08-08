<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
session_start(); 
$_SESSION['email']=$_POST['email'];  
$_SESSION['password']=$_POST['password'];  


// username and password sent from form 
$email=$_POST['email']; 
$password=$_POST['password']; 

function validatePassword($email,$password)
{
$con=mysqli_connect("localhost","web38","web38","loginsystem");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql= "SELECT * FROM users where email = '".$email ."' and password ='".$password."'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result); //check how many matching record - should be 1 if correct
if($count == 1){
	return true;//username and password is valid
}
else
	{
	return false; //invalid password
	}
	}

$isValidUser = validatePassword($email,$password);

if($isValidUser)
	{
	header("location:ooo.php"); // redirect to admin page
else {
	echo '<div class="w3-container" style="width:80%; margin:0 auto;">';
	echo "<center><br><br>Wrong Username or Password";
	echo '<br><br span class="w3-right w3-padding w3-hide-large w3-large"><br><a href="../mainMenu.php">Try Again?</a></span>';
	echo '</div></center>';
	header("location:index.php"); // redirect to staff menu page
	}
?>
	
