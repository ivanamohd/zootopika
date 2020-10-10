<?php
include "staff.php";
if(isSet($_POST['updateStaff']))
	{
		updateStaffInformation();
		header("refresh:1; url=staffList.php" );
	}

if(isSet($_POST['registerButton']))
	{
		addNewStaff();
		header("location:dashboard.php");
	}
if(isSet($_POST['deleteStaff']))
	{
	deleteStaff();
	echo "<script>";
	echo " alert('Staff record has been deleted.');
		</script>";
	header( "refresh:1; url=staffList.php" );
	}
?>