<?php
include "pending.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isSet($_POST['approvePending']))
	{
	$visitorReference=$_POST['visitorReferenceToApprove'];
	$qry = getPendingInformation($visitorReference);//call function to get detail car data
	$row = mysqli_fetch_assoc($qry);
	
    $to = $row['visitorEmail'];
    $subject = 'Zootopika | Ticket Payment Confirmed';
    $message = '
 
Your payment has been approved.
The detail of your payment is as follows:

    Reference Number: ' .$row['visitorReference']. '
	
	Name: ' .$row['visitorName']. '
	Ticket quantity: ' .$row['visitorQuantity']. '
	Amount: RM '.number_format($row['visitorTotal'],2).'
		
Please show this email upon arrival at Zoo Negara.

        ';

    $headers = 'From: zootopika@gmail.com';
    if (mail($to, $subject, $message, $headers))
		echo "<script>alert('Booking record has been approved.');</script>";
	
	addNewBook();
	deletePending();

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