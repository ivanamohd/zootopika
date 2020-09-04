<?php
session_start();

ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

include "book.php";
	
$con = mysqli_connect('localhost','web38','web38','zootopikadb') or die('Unable To connect');

$visitorReference = $_POST['visitorReferenceToUpdate'];
$qry = getBookInformation($visitorReference);//call function to get detail car data
$row = mysqli_fetch_assoc($qry);
//assign data to variable
$ticketID = $_row['ticketID'];
$visitorFN = $_row['visitorFN'];
$visitorLN = $_row['visitorLN'];
$visitorEmail = $_row['visitorEmail'];
$visitorContact = $_row['visitorContact'];
$visitorCountry = $_row['visitorCountry'];
$visitorDate = $_row['visitorDate'];
$visitorAmount = $_row['visitorAmount'];
$visitorQuantity = $_row['visitorQuantity'];

?>

<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/fox.jpg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Update Ticket
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../../assets/demo/demo.css" rel="stylesheet" />
  
  <style>
	select {
		  width: 183px;
		  padding: 3.4px 0px;
		}
		
		input {
		  width: 66%;
		}
		
		label {
			margin: 0 20px;
		}
  </style>
</head>

<body class="" style="background-color:#F4F4F4">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="../user.php" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="../../../visitor/index.html" class="simple-text logo-normal">
          Zootopika
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="../dashboard.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="../map.html">
              <i class="nc-icon nc-pin-3"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="../user.php">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="active">
            <a href="ticketList.php">
              <i class="nc-icon nc-paper"></i>
              <p>Ticket List</p>
            </a>
          </li>
		  <li>
            <a href="../password.php">
              <i class="nc-icon nc-key-25"></i>
              <p>Change Password</p>
            </a>
          </li>
          <li>
            <a href="../login/logout.php">
              <i class="nc-icon nc-user-run"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <?php
	echo '<div class="main-panel">

		<div class="content" align="center">
          <div class="col-md-7">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Update Booking</h5>
              </div>
              <div class="card-body" align="left">
                <form method="post" action="processBook.php">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Reference</label>
                        &emsp; &ensp; &ensp; &#8200; <input type="text" name="visitorReference" value="'.$visitorReference.'" readonly>
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Ticket ID</label>
                        &emsp; &#8202; <input type="text" name="ticketID" value="'.$ticketID.'" class="required">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>First Name</label>
                        &emsp; &#8202; <input type="text" name="visitorFN" value="'.$visitorFN.'" class="required">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Last Name</label>
                        &emsp; &#8202; <input type="text" name="visitorLN" value="'.$visitorLN.'" class="required">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Email</label>
                        &emsp; &#8202; <input type="text" name="visitorEmail" value="'.$visitorEmail.'" class="required">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Contact</label>
                        &emsp; &#8202; <input type="text" name="visitorContact" value="'.$visitorContact.'" class="required">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Country</label>
                        &emsp; &#8202; <input type="text" name="visitorCountry" value="'.$visitorCountry.'" class="required">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Date</label>
                        &emsp; &#8202; <input type="text" name="visitorDate" value="'.$visitorDate.'" class="required">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Amount</label>
                        &emsp; &nbsp; &#8202; <input type="number" name="visitorAmount" value="'.$visitorAmount.'" class="required">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Quantity</label>
                        &emsp; &#8202; <input type="text" name="visitorQuantity" value="'.$visitorQuantity.'" class="required">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="updateTicket" class="btn btn-primary btn-round">Update Ticket</button> &emsp; &emsp;
					  <a href="ticketList.php" > <button class="btn btn-primary btn-round" type="button">Back</button> </a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
		  </div>';
	?>

      <!--   Core JS Files   -->
      <script src="../assets/js/core/jquery.min.js"></script>
      <script src="../assets/js/core/popper.min.js"></script>
      <script src="../assets/js/core/bootstrap.min.js"></script>
      <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
      <!--  Google Maps Plugin    -->
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
      <!-- Chart JS -->
      <script src="../assets/js/plugins/chartjs.min.js"></script>
      <!--  Notifications Plugin    -->
      <script src="../assets/js/plugins/bootstrap-notify.js"></script>
      <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
      <script src="../assets/demo/demo.js"></script>
</body>

</html>