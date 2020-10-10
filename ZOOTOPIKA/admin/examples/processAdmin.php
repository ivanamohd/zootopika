<?php
include "admin.php";
if(isSet($_POST['updateButton']))
	{
		updateAdminInformation();
		header("refresh:1; url=user.php" );
	}
?>