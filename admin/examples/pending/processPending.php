<?php
include "pending.php";

if(isSet($_POST['approvePending']))
	{
	addNewBook();
	deletePending();

	echo "<script>";
	echo " alert('Booking record has been approved');
		</script>";
	header( "refresh:1; url=../dashboard.php" );
	}
	
if(isSet($_POST['declinePending']))
	{
	declinePending();
	echo "<script>";
	echo " alert('Booking has been declined.');
		</script>";
	header( "refresh:1; url=../dashboard.php" );
	}
?>