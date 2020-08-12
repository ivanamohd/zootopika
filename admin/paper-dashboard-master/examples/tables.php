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
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/fox.jpg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Tables
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="user.php" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="../../../2114_pixie/index.html" class="simple-text logo-normal">
          Zootopika
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./dashboard.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./map.html">
              <i class="nc-icon nc-pin-3"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="./user.php">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="active ">
            <a href="./tables.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Table List</p>
            </a>
          </li>
		  <li>
            <a href="password.php">
              <i class="nc-icon nc-key-25"></i>
              <p>Change Password</p>
            </a>
          </li>
		  <li>
            <a href="testLOGIN/logout.php">
              <i class="nc-icon nc-user-run"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Tables</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <?php
	include "admin.php";

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$qry = getListOfAdmin();

	//echo '<br>No of car:'.mysqli_num_rows($qry);
	echo '<div class="content">
			<div class="row">
			<div class="col-md-12">
			<div class="card">
			<div class="card-header">
				<h4 class="card-title"> Admin </h4>
			</div>
			<div class="card-body">
			<div class="table-responsive">
            <table class="table">
				<thead class=" text-primary">
					<th>No</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Contact</th>
				</thead>';
	$i=1;
	while($row=mysqli_fetch_assoc($qry))//Display car information
	{
		echo '<tbody>';
		echo '<tr>';
		echo '<td>'.$i.'</td>';
		echo '<td>'.$row['adminFN'].'</td>';
		echo '<td>'.$row['adminLN'].'</td>';
		echo '<td>'.$row['adminEmail'].'</td>';
		echo '<td>'.$row['adminContact'].'</td>';
		$i++;
	}
		echo'</tr>
        </tbody>
        </table>
        </div>
        </div>
        </div>
        </div>';
	?>
	
	<?php
	include "ticket/ticket.php";

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$qry = getListOfTicket();

	//echo '<br>No of car:'.mysqli_num_rows($qry);
	echo '<div class="col-md-12">
			<div class="card">
			<div class="card-header">
				<h4 class="card-title"> Ticket </h4>
			</div>
			<div class="card-body">
			<div class="table-responsive">
            <table class="table">
				<thead class=" text-primary">
					<th>No</th>
					<th>ID</th>
					<th>Name</th>
					<th>Type</th>
					<th>Package</th>
					<th>Price</th>
				</thead>';
	$i=1;
	while($row=mysqli_fetch_assoc($qry))//Display car information
	{
		echo '<tbody>';
		echo '<tr>';
		echo '<td>'.$i.'</td>';
		echo '<td>'.$row['ticketID'].'</td>';
		echo '<td>'.$row['ticketName'].'</td>';
		echo '<td>'.$row['ticketType'].'</td>';
		echo '<td>'.$row['ticketPackage'].'</td>';
		echo '<td>'.$row['ticketPrice'].'</td>';
		$i++;
	}
		echo'</tr>
        </tbody>
        </table>
        </div>
        </div>
        </div>
        </div>';
	?>
    </div>
  </div>
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