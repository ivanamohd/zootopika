<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Chelsea Market' rel='stylesheet'>

    <title>Buy Tickets</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top"; style="font-family: 'Chelsea Market'">
      <div class="container">
        <a class="navbar-brand" href="#"><img style = "height: 75px"; src="assets/images/zootopika logo.jpg" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="map.html">Map</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="feedback/contact.php">Contact Us</a>
            </li>
			<li class="nav-item active">
              <a class="nav-link" href="ticket.php">Buy Tickets</a>
			  <span class="sr-only">(current)</span>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <!-- Items Starts Here -->

  <!--ticket table-->

	<?php
	include "ticket/ticket.php";

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1); 
	error_reporting(E_ALL);

	$qry = getListOfTicket();

	//echo '<br>No of car:'.mysqli_num_rows($qry);
	echo '<br><div class="col-md-12">
	      <div class="container">
			<div class="card">
			<div class="card-header">
				<h4 class="card-title"> Ticket </h4>
			</div>
			<div class="card-body">
			<div class="table-responsive">
            <table class="table">
				<thead class=" text-primary">
					<th>No</th>
					<th>Name</th>
					<th>Price</th>
				</thead>';
	$i=1;
	while($row=mysqli_fetch_assoc($qry))//Display ticket information
	{
		echo '<tbody>';
		echo '<tr>';
		echo '<td>'.$i.'</td>';
		echo '<td>'.$row['ticketName'].'</td>';
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
    <!-- Featred Page Ends Here -->
    
<!-- Main Footer Starts Here -->
		<footer class="footer-distributed">

			<div class="footer-left">
				<br><br><h3>About<span>Zootopika</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
					|
					<a href="about.html">About</a>
					|
					<a href="feedback/contact.php">Contact Us</a>
					|
					<a href="map.html">Map</a>
					|
					<a href="ticket.php">Buy Tickets</a>
					<br>
					<a href="../mainLogin.php">Admin / Staff Login</a>
				</p>
			</div>

			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p>Jalan Taman Zooview, Taman Zooview,
					  <br> 68000 Ampang, Selangor</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+603-4108 3422/7/8</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p>ztpzoonegara@gmail.com</p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the company</span>
					Zoo Negara Malaysia is managed by the Malaysian Zoological Society, a non-governmental organization established to create the first local zoo for Malaysians.</p>
				<div class="footer-icons">
					<a href="https://www.facebook.com/znegaramalaysia/" target="blank"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/znegaraofficial?lang=en" target="blank"><i class="fa fa-twitter"></i></a>
					<a href="https://www.instagram.com/zoonegara_malaysia/tagged/?hl=en" target="blank"><i class="fa fa-instagram"></i></a>
				</div>
			</div>
			</footer>
			<!--footer-->
    <!-- Sub Footer Starts Here -->
    <div class="sub-footer">
	<div style="background-color:black">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text">
				<p style="text-align:centre" class="copy">© Copyright 2020, Zootopika Group. All rights reserved.</p> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sub Footer Ends Here -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>