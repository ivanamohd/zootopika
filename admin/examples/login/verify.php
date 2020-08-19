<?php
$con = mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con){
    echo mysqli_connect_error();
    exit;
}

if (isset($_GET['adminEmail']) && !empty($_GET['adminEmail']) and isset($_GET['adminPassword']) && !empty($_GET['adminPassword'])) {
    // Verify data
    $sql = "SELECT * FROM admin where adminEmail = '" . $_GET['adminEmail'] . "'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result); //check how many matching record - should be 1 if correct
    $row = mysqli_fetch_assoc($result);
    if ($count == 1) {
        $sql = "UPDATE admin SET adminPassword = '" . $_GET['adminPassword'] . "' where adminEmail = '" . $_GET['adminEmail'] . "'";
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