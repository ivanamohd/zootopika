<?php
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