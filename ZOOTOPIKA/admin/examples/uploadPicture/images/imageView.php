<?php
    $con = mysqli_connect("localhost", "web38", "web38", "zootopikadb");
    if (!$con) {
        echo  mysqli_connect_error();
        exit;
    }

    if(isset($_GET['username'])) {
        $sql = "SELECT * FROM admin WHERE adminName = '" . $_GET['username'] . "'";
        $result = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($con));
        $row = mysqli_fetch_array($result);
        header("Content-type: " . $row["image"]);
        echo $row["imageData"];
    }
    mysqli_close($con);
?>