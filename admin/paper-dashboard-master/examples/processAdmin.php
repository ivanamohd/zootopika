<?php
include "admin.php";
if(isSet($_POST['saveButton']))
	{
		updateAdminInformation();
	}
?>