<?php
//addNewCar function==================
/*function addNewAdmin()
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
}*/

//getListOfCar function ==================
function getListOfFeedback()
{
//create connection
$con=mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = 'select * from feedback';
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function getFeedbackInformation($visitorName)
{
//create connection
$con=mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from feedback where visitorName = '".$visitorName."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function deleteFeedback()
{
$con = mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
  
  $sql='delete from feedback';

	$qry = mysqli_query($con,$sql);

}
?>