<?php
//addNewCar function==================
/*function addNewCar()
{
$con = mysqli_connect("localhost","web2","web2","cardb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
 //collect data from post array
 $regNumber = $_POST['regNumber'];
 $brand = $_POST['brand'];
 $regDate = $_POST['regDate'];
 $price = $_POST['price'];
 $model = $_POST['model'];
  
  $sql="INSERT INTO car(regNumber, brand,regDate,price,model)
	VALUES ('$regNumber','$brand','$regDate','$price','$model')";
 
//echo $sql;
	$qry = mysqli_query($con,$sql);
 mysqli_query($con,$sql);
} */

//getListOfCar function ==================
function getListOfAdmin()
{
//create connection
$con=mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = 'select * from admin';
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
/*
//delete function ==================
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
}*/


//============getCarInformation
/*function getAdminInformation($adminName)
{
//create connection
$con=mysqli_connect("localhost","web38","web38","loginsystem");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from admin where adminName = '".$adminName."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}*/

function getAdminInformation($adminName)
{
//create connection
$con=mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from admin where adminName = '".$adminName."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
function updateAdminInformation()
{
//create connection
$con=mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
//get the data to update
 $adminName = $_POST['adminName'];
 $adminFN = $_POST['adminFN'];
 $adminLN = $_POST['adminLN'];
 $adminEmail = $_POST['adminEmail'];
 $adminContact = $_POST['adminContact'];
 $adminAbout = $_POST['adminAbout'];
 
$sql = 'update admin set adminFN = "'.$adminFN.'", adminLN = "'.$adminLN.'", 
		adminEmail = "'.$adminEmail.'", adminContact = "'.$adminContact.'", adminAbout = "'.$adminAbout.'" where adminName = "'.$adminName.'"';
	echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

/*
//================updateCarInformation
function updateAdminInformation()
{
//create connection
$con=mysqli_connect("localhost","web38","web38","loginsystem");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
//get the data to update
 $adminName = $_POST['adminName'];
 $adminFN = $_POST['adminFN'];
 $adminLN = $_POST['adminLN'];
 $adminEmail = $_POST['adminEmail'];
 $adminContact = $_POST['adminContact'];
 $adminAbout = $_POST['adiminAbout'];
 
$sql = 'update admin SET adminFN ="'.$adminFN.'", adminLN = "'.$adminLN.'", adminEmail = "'.$adminEmail.'", 
adminContact = "'.$adminContact.'", adminAbout = "'.$adminAbout.'" WHERE regNumber = "'.$adminName.'"';
	echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
} */