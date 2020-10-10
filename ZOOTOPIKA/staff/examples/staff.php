<?php
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
	//echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}