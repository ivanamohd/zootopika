<?php
//user.php
//=================== validatePassword
function validatePassword($staffName,$staffPassword)
{
$con=mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql= "SELECT * FROM staff where staffName = '".$staffName ."' and staffPassword ='".$staffPassword."'";
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
?>