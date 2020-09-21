<!--<!DOCTYPE html>
<html>
<body>

<p>Click on the "Choose File" button to upload a file:</p>

<form action="" method="post">
  <input type="file" id="myFile" name="visitorReceipt">
  <input type="submit" name="uploadBukti">
</form>

</body>
</html>-->

<?php
	/*if(isSet($_POST['uploadBukti']))
	{
	$con = mysqli_connect("localhost","web38","web38","zootopikadb");
	if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
	
	$visitorReceipt = $_POST['visitorReceipt'];
	
	$sql="INSERT INTO pending(visitorReceipt) VALUES ('$visitorReceipt')";
 
	echo $sql;
	$qryy = mysqli_query($con,$sql);
	mysqli_query($con,$sql);
	}*/
?>

<?php
error_reporting(0); 
?> 
<?php
/*$msg = ""; 

// If upload button is clicked ... 
if (isset($_POST['upload'])) { 

	$filename = $_FILES["uploadfile"]["name"]; 
	$tempname = $_FILES["uploadfile"]["tmp_name"];	 
	$folder = "image/".$filename; 
		
	$db = mysqli_connect("localhost", "web38", "web38", "zootopikadb"); 

		// Get all the submitted data from the form 
		$sql = 'update pending SET visitorReceipt ="'.$filename.'"'; 

		// Execute query 
		mysqli_query($db, $sql); 
		
		// Now let's move the uploaded image into the folder: image 
		if (move_uploaded_file($tempname, $folder)) { 
			$msg = "Image uploaded successfully"; 
		}else{ 
			$msg = "Failed to upload image"; 
	} 
} 
$result = mysqli_query($db, "SELECT * FROM pending");*/
?> 

<!--<!DOCTYPE html> 
<html> 
<head> 
<title>Image Upload</title> 
<link rel="stylesheet" type= "text/css" href ="style.css"/> 
<div id="content"> 

<form method="POST" action="" enctype="multipart/form-data"> 
	<input type="file" name="uploadfile" value=""/> 
		
	<div> 
		<button type="submit" name="upload">UPLOAD</button> 
		</div> 
</form> 
</div> 
</body> 
</html>-->

<?php echo '<img onClick="triggerClick()" id="profileDisplay" class="card-img-top" src="images/view.php?" alt="Click here to upload picture">';?>

