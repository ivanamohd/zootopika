<?php
$con = mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con){
    echo mysqli_connect_error();
    exit;
}

if (isset($_GET['staffEmail']) && !empty($_GET['staffEmail']) and isset($_GET['staffPassword']) && !empty($_GET['staffPassword'])) {
    // Verify data
    $sql = "SELECT * FROM staff where staffEmail = '" . $_GET['staffEmail'] . "'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result); //check how many matching record - should be 1 if correct
    $row = mysqli_fetch_assoc($result);
    if ($count == 1) {
		$staffPassword=$_GET['staffPassword']; 
		$salt = "codeflix";
		$hash = sha1($staffPassword.$salt);
		
        $sql = "UPDATE staff SET staffPassword = '" . $hash . "' where staffEmail = '" . $_GET['staffEmail'] . "'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            header("location: index.php");
        } else{
            header("location: index2.php");

        }

    } else {
        header("location: index2.php");
    }
} else {
    header("location: index2.php");
}
?>