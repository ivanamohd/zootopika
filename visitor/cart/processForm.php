<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  $msg = "";
  $msg_class = "";
  
  $conn = mysqli_connect("localhost", "web38", "web38", "zootopikadb");
  if(!$conn)
	  exit;
  if (isset($_POST['insertReceipt'])) {
	  $imgData = addslashes(file_get_contents($_FILES['profileImage']['tmp_name']));
    $imageProperties = getimageSize($_FILES['profileImage']['tmp_name']);
	$sql="UPDATE pending SET visitorReceipt = '{$imageProperties['mime']}', visitorReceiptData = '{$imgData}' WHERE pending.visitorReference = '".$_SESSION['visitorReference']."'";
    $result=mysqli_query($conn,$sql);
	echo "<script>alert('Picture Changed');</script>";
  }
?>