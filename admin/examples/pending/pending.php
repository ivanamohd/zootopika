<?php
//addNewTicket function==================
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
 
/*$qry = getPendingInformation();
$pendingInfo = mysqli_fetch_assoc($qry);

$visitorReference = $pendingInfo['visitorReference'];
$visitorName = $pendingInfo['visitorName'];
$visitorEmail = $pendingInfo['visitorEmail'];
$visitorContact = $pendingInfo['visitorContact'];
$visitorDate = $pendingInfo['visitorDate'];
$visitorQuantity = $pendingInfo['visitorQuantity'];
$visitorTotal = $pendingInfo['visitorTotal']; */
 
 //$_SESSION["cart_item"] as $item){
 //$item_price = $item["quantity"]*$item["price"];
 
 
 
  $sql="INSERT INTO book(visitorReference, visitorName, visitorEmail, visitorContact, visitorDate, visitorQuantity, visitorTotal)
	VALUES ('$visitorReference','$visitorName','$visitorEmail','$visitorContact','$visitorDate','$visitorQuantity','$visitorTotal')";
 
  //echo $sql;
	$qry = mysqli_query($con,$sql);
 mysqli_query($con,$sql);
}

//getListOfTicket function ==================
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
/*
//searchByRegNumber function ==================
function findCarByRegNumber()
{
//create connection
$con=mysqli_connect("localhost","web2","web2","cardb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = 'select * from car where regNumber ="'.$_POST['searchValue'].'"';
echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
//findCarByBrand function ==================
function findCarByBrand()
{
//create connection
$con=mysqli_connect("localhost","web2","web2","cardb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from car where brand like '%".$_POST['searchValue']."%'";
echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
function findCarByModel()
{
//create connection
$con=mysqli_connect("localhost","web2","web2","cardb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from car where model like '%".$_POST['searchValue']."%'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}  */
//============getCarInformation
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
//================updateCarInformation
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
/*
//getAvailableCarOnTheseDate function ==================
function getAvailableCarOnTheseDate($startDate ,$endDate)
{
$con = mysqli_connect('localhost','web2','web2','cardb');
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $sqlStr = "select regNumber,brand, model,price from car
where regNumber not in(
(SELECT distinct regNumber from bookings";
 $sqlStr .= " where Date_rent_start BETWEEN '".$startDate."' AND '".$endDate."'";
 $sqlStr .= " or Date_rent_end BETWEEN '".$startDate."' AND '".$endDate."'))";
 echo $sqlStr;
 $result = mysqli_query($con,$sqlStr);
 return $result;//if no car available, result will be empty

} */
?>