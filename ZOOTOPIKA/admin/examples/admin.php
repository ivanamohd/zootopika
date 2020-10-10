<?php
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
	//echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}