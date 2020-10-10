<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    $con = mysqli_connect("localhost", "web38", "web38", "zootopikadb");
    if (!$con) {
        echo  mysqli_connect_error();
        exit;
    }

    if(isset($_GET['visitorReference'])) {
        $sql = "SELECT * FROM pending WHERE visitorReference = '".$visitorReference."'";
        $result = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($con));
        $row = mysqli_fetch_array($result);
        header("Content-type: " . $row["visitorReceipt"]);
        echo $row["visitorReceiptData"];
    }
    mysqli_close($con);
?>