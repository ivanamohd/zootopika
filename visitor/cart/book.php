<?php
//addNewPending function==================
function addNewBook()
{
$con = mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
	
 //collect data from post array
 $visitorName = $_POST['visitorName'];
 $visitorEmail = $_POST['email'];
 $visitorContact = $_POST['visitorContact'];
 $visitorDate = $_POST['visitorDate'];
 $visitorQuantity = $_POST['visitorQuantity'];
 $visitorTotal = $_POST['visitorTotal'];
 
 $visitorReference=$visitorName.$visitorDate;
 
  $sql="INSERT INTO pending(visitorReference, visitorName, visitorEmail, visitorContact, visitorDate, visitorQuantity, visitorTotal)
	VALUES ('$visitorReference','$visitorName','$email','$visitorContact','$visitorDate','$visitorQuantity','$visitorTotal')";
 
  echo $sql;
	$qry = mysqli_query($con,$sql);
 mysqli_query($con,$sql);
}

function getListOfBook()
{
//create connection
$con=mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = 'select * from pending';
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
?>