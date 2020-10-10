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
	
	$visitorReference=$_POST['visitorReferenceToApprove'];
$qry = getPendingInformation($visitorReference);//call function to get detail car data
$row = mysqli_fetch_assoc($qry);

 //collect data from post array
 $visitorName = $row['visitorName'];
 $visitorEmail = $row['visitorEmail'];
 $visitorContact = $row['visitorContact'];
 $visitorDate = $row['visitorDate'];
 $visitorQuantity = $row['visitorQuantity'];
 $visitorTotal = $row['visitorTotal'];
 
 $visitorReference=$row['visitorReference'];
 
  $sql="INSERT INTO book(visitorReference, visitorName, visitorEmail, visitorContact, visitorDate, visitorQuantity, visitorTotal)
	VALUES ('$visitorReference','$visitorName','$visitorEmail','$visitorContact','$visitorDate','$visitorQuantity','$visitorTotal')";
 
  //echo $sql;
	$qry = mysqli_query($con,$sql);
 mysqli_query($con,$sql);
}

//getListOfPending function ==================
function getListOfPending()
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

//delete function ==================
function deletePending()
{
$con = mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}

 $visitorReference = $_POST['visitorReferenceToApprove'];//get selected regNumber to delete
  
  $sql="delete from pending where visitorReference ='".$visitorReference."'";
	//echo $sql;
	$qry = mysqli_query($con,$sql);

}

function declinePending()
{
$con = mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}

 $visitorReference = $_POST['visitorReferenceToDecline'];//get selected regNumber to delete
  
  $sql="delete from pending where visitorReference ='".$visitorReference."'";
	//echo $sql;
	$qry = mysqli_query($con,$sql);

}

function getPendingInformation($visitorReference)
{
//create connection
$con=mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from pending where visitorReference = '".$visitorReference."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function updatePendingInformation()
{
//create connection
$con=mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
//get the data to update
 $visitorName = $_POST['visitorName'];
 $visitorEmail = $_POST['visitorEmail'];
 $visitorContact = $_POST['visitorContact'];
 $visitorDate = $_POST['visitorDate'];
 $visitorQuantity = $_POST['visitorQuantity'];
 $visitorTotal = $_POST['visitorTotal'];
 $visitorReference = $_POST['visitorReference'];
 
$sql = 'update pending SET visitorName ="'.$visitorName.'", visitorEmail = "'.$visitorEmail.'", visitorContact = "'.$visitorContact.'", visitorDate = "'.$visitorDate.'",
visitorQuantity = "'.$visitorQuantity.'", visitorTotal = "'.$visitorTotal.'" WHERE visitorReference = "'.$visitorReference.'"';

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
?>