<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
function addNewAdmin()
{
$con = mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
 //collect data from post array
 $adminName = $_POST['adminName'];
 $adminFN = $_POST['adminFN'];
 $adminLN = $_POST['adminLN'];
 $adminEmail = $_POST['adminEmail'];
 $adminContact = $_POST['adminContact'];
 $adminPassword = $_POST['adminPassword'];
  
  $sql="INSERT INTO admin(adminName, adminFN, adminLN, adminEmail, adminContact, adminPassword)
	VALUES ('$adminName','$adminFN','$adminLN','$adminEmail','$adminContact','$adminPassword')";
 
//echo $sql;
	$qry = mysqli_query($con,$sql);
 mysqli_query($con,$sql);
}


if(isSet($_POST['registerButton']))
	{
		addNewAdmin();
		header("location:../dashboard.php");
	}	

	
?>
