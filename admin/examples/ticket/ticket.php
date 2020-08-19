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

/*//delete function ==================
function deleteCar()
{
$con = mysqli_connect("localhost","web2","web2","cardb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}

 $regNumber = $_POST['regNumberToDelete'];//get selected regNumber to delete
  
  $sql="delete from car
		where regNumber ='".$regNumber."'";
		echo $sql;
	$qry = mysqli_query($con,$sql);

}

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
}
//============getCarInformation
function getCarInformation($regNum)
{
//create connection
$con=mysqli_connect("localhost","web2","web2","cardb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from car where regNumber = '".$regNum."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
//================updateCarInformation
function updateCarInformation()
{
//create connection
$con=mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
//get the data to update
 $oldRegNumber = $_POST['regNumber'];
 $newRegNumber = $_POST['newRegNumber'];
 $brand = $_POST['brand'];
 $regDate = $_POST['regDate'];
 $price = $_POST['price'];
 $model = $_POST['model'];
 
$sql = 'update car SET regNumber ="'.$newRegNumber.'", brand = "'.$brand.'", model = "'.$model.'", 
regDate = "'.$regDate.'", price = "'.$price.'" WHERE regNumber = "'.$oldRegNumber.'"';
	echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
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

}*/
?>