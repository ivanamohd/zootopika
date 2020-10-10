<?php
//addNewTicket function==================
function addNewTicket()
{
$con = mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
 //collect data from post array
 $ticketID = $_POST['ticketID'];
 $ticketName = $_POST['ticketName'];
 $ticketType = $_POST['ticketType'];
 $ticketPackage = $_POST['ticketPackage'];
 $ticketPrice = $_POST['ticketPrice'];
  
  $sql="INSERT INTO ticket(ticketID, ticketName,ticketType,ticketPackage,ticketPrice)
	VALUES ('$ticketID','$ticketName','$ticketType','$ticketPackage','$ticketPrice')";
 
//echo $sql;
	$qry = mysqli_query($con,$sql);
 mysqli_query($con,$sql);
}

//getListOfTicket function ==================
function getListOfTicket()
{
//create connection
$con=mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = 'select * from ticket';
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

//delete function ==================
function deleteTicket()
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

function getTicketInformation($ticketID)
{
//create connection
$con=mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from ticket where ticketID = '".$ticketID."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
//================updateCarInformation
function updateTicketInformation()
{
//create connection
$con=mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
//get the data to update
 $ticketID = $_POST['ticketID'];
 $ticketName = $_POST['ticketName'];
 $ticketType = $_POST['ticketType'];
 $ticketPackage = $_POST['ticketPackage'];
 $ticketPrice = $_POST['ticketPrice'];
 
$sql = 'update ticket SET ticketName ="'.$ticketName.'", ticketType = "'.$ticketType.'", ticketPackage = "'.$ticketPackage.'", 
ticketPrice = "'.$ticketPrice.'" WHERE ticketID = "'.$ticketID.'"';

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
?>