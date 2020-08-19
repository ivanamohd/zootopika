<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
function addNewStaff()
{
$con = mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
 //collect data from post array
 $staffName = $_POST['staffName'];
 $staffFN = $_POST['staffFN'];
 $staffLN = $_POST['staffLN'];
 $staffEmail = $_POST['staffEmail'];
 $staffContact = $_POST['staffContact'];
 $staffPassword = $_POST['staffPassword'];
  
  $sql="INSERT INTO staff(staffName, staffFN, staffLN, staffEmail, staffContact, staffPassword)
	VALUES ('$staffName','$staffFN','$staffLN','$staffEmail','$staffContact','$staffPassword')";
 
//echo $sql;
	$qry = mysqli_query($con,$sql);
 mysqli_query($con,$sql);
}


if(isSet($_POST['registerButton']))
	{
		addNewStaff();
		header("location:../dashboard.php");
	}	

	
?>
