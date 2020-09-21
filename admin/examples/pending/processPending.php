<?php
include "pending.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
	
if(isSet($_POST['viewPending']))
	{
	$con = mysqli_connect("localhost", "web38", "web38", "zootopikadb");
    if (!$con) {
        echo  mysqli_connect_error();
        exit;
    }	
	
	$visitorReference = $_POST['visitorReferenceToView'];
	
	$sql = "select * from pending where visitorReference = '".$visitorReference."'";
	$result = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($con));
	$row = mysqli_fetch_array($result);
	header("Content-type: " . $row["visitorReceipt"]);
	echo $row["visitorReceiptData"];
	}
?>