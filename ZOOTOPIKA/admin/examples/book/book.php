<?php
function getListOfBook()
{
//create connection
$con=mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = 'select * from book';
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

//delete function ==================
function deleteBook()
{
$con = mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}

 $visitorReference = $_POST['visitorReferenceToDelete'];//get selected regNumber to delete
  
  $sql="delete from book where visitorReference ='".$visitorReference."'";

	$qry = mysqli_query($con,$sql);

}

function getBookInformation($visitorReference)
{
//create connection
$con=mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from book where visitorReference = '".$visitorReference."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
//================updateCarInformation
function updateBookInformation()
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
 
$sql = 'update book SET visitorName ="'.$visitorName.'", visitorEmail = "'.$visitorEmail.'", visitorContact = "'.$visitorContact.'", visitorDate = "'.$visitorDate.'",
visitorQuantity = "'.$visitorQuantity.'", visitorTotal = "'.$visitorTotal.'" WHERE visitorReference = "'.$visitorReference.'"';

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
?>