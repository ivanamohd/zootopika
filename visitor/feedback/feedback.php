<?php
//addNewCar function==================
function addNewFeedback()
{
$con = mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
 //collect data from post array
 $visitorName = $_POST['visitorName'];
 $visitorEmail = $_POST['visitorEmail'];
 $visitorContact = $_POST['visitorContact'];
 $visitorCountry = $_POST['visitorCountry'];
 $visitorMessage = $_POST['visitorMessage'];
  
  $sql="INSERT INTO feedback(visitorName, visitorEmail, visitorContact, visitorCountry, visitorMessage)
	VALUES ('$visitorName','$visitorEmail','$visitorContact','$visitorCountry','$visitorMessage')";
 
//echo $sql;
	$qry = mysqli_query($con,$sql);
 mysqli_query($con,$sql);
}

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
?>