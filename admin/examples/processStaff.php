<?php
include "staff.php";
if(isSet($_POST['updateButton']))
	{
		updateStaffInformation();
		header("refresh:1; url=user.php" );
	}

if(isSet($_POST['registerButton']))
	{
		addNewStaff();
		header("location:dashboard.php");
	}	
?>