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
 //collect data from post array
 $visitorReference = $_POST['visitorReference'];
 $ticketID = $_POST['ticketID'];
 $visitorFN = $_POST['visitorFN'];
 $visitorLN = $_POST['visitorLN'];
 $visitorEmail = $_POST['visitorEmail'];
 $visitorContact = $_POST['visitorContact'];
 $visitorCountry = $_POST['visitorCountry'];
 $visitorDate = $_POST['visitorDate'];
 $visitorAmount = $_POST['visitorAmount'];
 $visitorQuantity = $_POST['visitorQuantity'];
  
  $sql="INSERT INTO ticket(visitorReference, ticketID, visitorFN, visitorLN, visitorEmail, visitorContact, visitorCountry, visitorDate, visitorAmount, visitorQuantity)
	VALUES ('$visitorReference','$ticketID','$visitorFN','$visitorLN','$visitorEmail','$visitorContact','$visitorCountry','$visitorDate','$visitorAmount','$visitorQuantity')";
 
//echo $sql;
	$qry = mysqli_query($con,$sql);
 mysqli_query($con,$sql);
}

//getListOfTicket function ==================
function getListOfBook()
{
//create connection
$con=mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = 'select * from booking';
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

 $ticketID = $_POST['ticketIDToDelete'];//get selected regNumber to delete
  
  $sql="delete from ticket
		where ticketID ='".$ticketID."'";

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
 $visitorReference = $_POST['visitorReference'];
 $ticketID = $_POST['ticketID'];
 $visitorFN = $_POST['visitorFN'];
 $visitorLN = $_POST['visitorLN'];
 $visitorEmail = $_POST['visitorEmail'];
 $visitorContact = $_POST['visitorContact'];
 $visitorCountry = $_POST['visitorCountry'];
 $visitorDate = $_POST['visitorDate'];
 $visitorAmount = $_POST['visitorAmount'];
 $visitorQuantity = $_POST['visitorQuantity'];
 
$sql = 'update ticket SET ticketID = "'.$ticketID.'", visitorFN = "'.$visitorFN.'", visitorLN = "'.$visitorLN.'", 
visitorEmail = "'.$visitorEmail.'", visitorContact = "'.$visitorContact.'", visitorCountry = "'.$visitorCountry.'", visitorDate = "'.$visitorDate.'",
visitorAmount = "'.$visitorAmount.'", visitorQuantity = "'.$visitorQuantity.'" WHERE visitorReference = "'.$visitorReference.'"';

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