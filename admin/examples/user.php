<?php
session_start();
include "admin.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Correction I
//$adminName tukar jadi $_SESSION['adminName'] 
$qry = getAdminInformation($_SESSION['adminName']);
$adminInfo = mysqli_fetch_assoc($qry);

$adminName = $adminInfo['adminName'];
$adminFN = $adminInfo['adminFN'];
$adminLN = $adminInfo['adminLN'];
$adminEmail = $adminInfo['adminEmail'];
$adminContact = $adminInfo['adminContact'];
$adminAbout = $adminInfo['adminAbout'];

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
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/fox.jpg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Profile
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

	<style>
		.dropbtn {
		  font-size: 20px;
		  border: none;
		  cursor: pointer;
		}

		.dropdown {
		  position: relative;
		  display: inline-block;
		}

		.dropdown-content {
		  display: none;
		  position: absolute;
		  right: 0;
		  background-color: #f9f9f9;
		  min-width: 200px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		}

		.dropdown-content a {
		  color: black;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		}

		.dropdown-content a:hover {background-color: #f1f1f1;}
		.dropdown:hover .dropdown-content {display: block;}
		.dropdown:hover .dropbtn {background-color: #ffff;}
	</style>
</head>

<body class="" style="background-color:#F4F4F4">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="user.php" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="../../visitor/index.html" class="simple-text logo-normal">
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
          <li class="active ">
            <a href="./user.php">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="ticket/ticketList.php">
              <i class="nc-icon nc-paper"></i>
              <p>Ticket List</p>
            </a>
          </li>
		  <li>
            <a href="staff/staffList.php">
              <i class="nc-icon nc-badge"></i>
              <p>Staff List</p>
            </a>
          </li>
		  <li>
            <a href="password.php">
              <i class="nc-icon nc-key-25"></i>
              <p>Change Password</p>
            </a>
          </li>
          <li>
            <a href="login/logout.php">
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
            <a class="navbar-brand" href="javascript:;">Profile</a>
          </div>
		  <div class="collapse navbar-collapse justify-content-end" id="navigation">
		  <ul class="navbar-nav">
		  <li class="nav-item">
                <div class="dropdown" style="float:right">
				  <button class="dropbtn"><i class="nc-icon nc-settings-gear-65"></i></button>
					  <div class="dropdown-content">
						<a href="uploadPicture/changePicture.php">Change Profile Picture</a>
					  </div>
				</div>
            </ul>
        </div>
		</div>
      </nav>
      <!-- End Navbar -->
	  <?php
	  echo '<div class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/damir-bosnjak.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="uploadPicture/changePicture.php">
					<img id="profileDisplay" class="avatar border-gray" src="uploadPicture/images/imageView.php?username=' . $_SESSION['adminName'] . '" alt="Card image cap">
                    <h5 class="title"> '.$adminFN.' '.$adminLN.'</h5>
                  </a>
                  <p class="description">
                    @'.$adminName.'
                  </p>
                </div>
                <p class="description text-center">
                  "'.$adminAbout.'"
                </p>
              </div>
              
            </div>';
		?>
          </div>
 
          <?php
          //correction2
          //echo from all jadi echo point A - B senang sikit so tak pening
          //then tukar variable add '. .' end and closing
          echo '<div class="col-md-8">
          <div class="card card-user">
          <div class="card-header">
          <h5 class="card-title">Edit Profile</h5>
          </div>
          <div class="card-body">
          <form action="processAdmin.php" method = "POST">
          <div class="row">
          <div class="col-md-4 pr-1">
          <div class="form-group">
          <label>Username (disabled)</label>
          <input type="text" class="form-control" placeholder="Username" name="adminName" value="'.$adminName.'" readonly>
          </div>
          </div>
          <div class="col-md-4 px-1">
          <div class="form-group">
          <label>Contact Number</label>
          <input type="text" class="form-control" placeholder="Username" name="adminContact" value="'.$adminContact.'">
          </div>
          </div>
          <div class="col-md-4 pl-1">
          <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" placeholder="Email" name="adminEmail" value="'.$adminEmail.'">
          </div>
          </div>
          </div>
          <div class="row">
          <div class="col-md-6 pr-1">
          <div class="form-group">
          <label>First Name</label>
          <input type="text" class="form-control" placeholder="First Name" name="adminFN" value="'.$adminFN.'">
          </div>
          </div>
          <div class="col-md-6 pl-1">
          <div class="form-group">
          <label>Last Name</label>
          <input type="text" class="form-control" placeholder="Last Name" name="adminLN" value="'.$adminLN.'">
          </div>
          </div>
          </div>
          <div class="row">
          <div class="col-md-12">
          <div class="form-group">
          <label>About Me</label>
          <input type="text" class="form-control textarea" placeholder="About" name="adminAbout" value="'.$adminAbout.'">
          </div>
          </div>
          </div>
          <div class="row">
          <div class="update ml-auto mr-auto">
          <input type="submit" name="updateButton" class="btn btn-primary btn-round"value="update profile">
          </div>
          </div>
          </form>
          </div>
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