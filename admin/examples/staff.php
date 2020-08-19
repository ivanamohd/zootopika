<?php
//addNewCar function==================
/*function addNewAdmin()
{
$con = mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
 //collect data from post array
 $adminName = $_POST['adminName'];
 $adminFN = $_POST['adminFN'];
 $adminLN = $_POST['adminLN'];
 $adminEmail = $_POST['adminEmail'];
 $adminContact = $_POST['adminContact'];
 $adminPassword = $_POST['adminPassword'];
  
  $sql="INSERT INTO admin(adminName, adminFN, adminLN, adminEmail, adminContact, adminPassword)
	VALUES ('$adminName','$adminFN','$adminLN','$adminEmail','$adminContact','$adminPassword')";
 
//echo $sql;
	$qry = mysqli_query($con,$sql);
 mysqli_query($con,$sql);
}*/

//getListOfCar function ==================
function getListOfStaff()
{
//create connection
$con=mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = 'select * from staff';
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

function getStaffInformation($staffName)
{
//create connection
$con=mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from staff where staffName = '".$staffName."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
function updateStaffInformation()
{
//create connection
$con=mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
//get the data to update
 $staffName = $_POST['staffName'];
 $staffFN = $_POST['staffFN'];
 $staffLN = $_POST['staffLN'];
 $staffEmail = $_POST['staffEmail'];
 $staffContact = $_POST['staffContact'];
 $staffAbout = $_POST['staffAbout'];
 
$sql = 'update staff set staffFN = "'.$staffFN.'", staffLN = "'.$staffLN.'", 
		staffEmail = "'.$staffEmail.'", staffContact = "'.$staffContact.'", staffAbout = "'.$staffAbout.'" where staffName = "'.$staffName.'"';
	echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}