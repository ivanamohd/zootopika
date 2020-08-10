<?php
session_start();
$adminName = $_SESSION["adminName"];/* userid of the user */
$con = mysqli_connect('localhost','web38','web38','zootopikadb') or die('Unable To connect');
if(count($_POST)>0) {
$result = mysqli_query($con,"SELECT * from admin WHERE adminName='" . $adminName . "'");
$row=mysqli_fetch_array($result);
if($_POST["currentPassword"] == $row["password"] && $_POST["newPassword"] == $row["confirmPassword"] ) {
mysqli_query($con,"UPDATE admin set adminPassword='" . $_POST["newPassword"] . "' WHERE name='" . $adminName . "'");
$message = "Password Changed Sucessfully";
} else{
 $message = "Password is not correct";
}
}
?>