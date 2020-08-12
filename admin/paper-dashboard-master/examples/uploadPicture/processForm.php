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
  if (isset($_POST['save_profile'])) {
	  $imgData = addslashes(file_get_contents($_FILES['profileImage']['tmp_name']));
    $imageProperties = getimageSize($_FILES['profileImage']['tmp_name']);
	$sql="UPDATE admin SET image = '{$imageProperties['mime']}', imageData = '{$imgData}' WHERE admin.adminName = '".$_SESSION['adminName']."'";
    $result=mysqli_query($conn,$sql);
	echo "<script>alert('Picture Changed');</script>";
  }
?>