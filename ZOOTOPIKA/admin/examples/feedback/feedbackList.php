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
    Feedback List
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
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
  <style>
	table.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
	
	button {
		padding: 0;
		border: none;
		background: none;
		outline: none;
		color: #51CBCE;
	}
  </style>
  
  <script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
  </script>
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
          ZOOTOPIKA
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
          <li>
            <a href="../ticket/ticketList.php">
              <i class="nc-icon nc-paper"></i>
              <p>Ticket Management</p>
            </a>
          </li>
		  <li>
            <a href="../staff/staffList.php">
              <i class="nc-icon nc-badge"></i>
              <p>Staff Management</p>
            </a>
          </li>
		  <li class="active">
            <a href="#">
              <i class="nc-icon nc-email-85"></i>
              <p>Feedback</p>
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
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Feedback</a>
          </div>
      </nav>
      <!-- End Navbar -->
    <?php
	include "feedback.php";

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$qry = getListOfFeedback();

	//echo '<br>No of car:'.mysqli_num_rows($qry);
	echo '<div class="content">
			<div class="row">
			<div class="col-md-12">
			<div class="card">
			<div class="card-header row">
				<h4 class="card-title col-md-10"> Feedback </h4>
			</div>
			<div class="card-body">
			<div class="table-responsive">
            <table class="table table-hover">
				<thead class=" text-primary" align="center">
					<th>No</th>
					<th>Name</th>
					<th>Email</th>
					<th>Contact</th>
					<th>Country</th>
					<th>Message</th>
				</thead>';
	$i=1;
	while($row=mysqli_fetch_assoc($qry))//Display car information
	{
		echo '<tbody align="center">';
		echo '<tr>';
		echo '<td>'.$i.'</td>';
		echo '<td>'.$row['visitorName'].'</td>';
		echo '<td>'.$row['visitorEmail'].'</td>';
		echo '<td>'.$row['visitorContact'].'</td>';
		echo '<td>'.$row['visitorCountry'].'</td>';
		echo '<td style="padding: 20px">'.$row['visitorMessage'].'</td>';
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

  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
