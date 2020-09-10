<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByTicketID = $db_handle->runQuery("SELECT * FROM ticket WHERE ticketID='" . $_GET["ticketID"] . "'");
			$itemArray = array($productByTicketID[0]["ticketID"]=>array('ticketName'=>$productByTicketID[0]["ticketName"], 'ticketID'=>$productByTicketID[0]["ticketID"], 'quantity'=>$_POST["quantity"], 'price'=>$productByTicketID[0]["ticketPrice"], 'image'=>$productByTicketID[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByTicketID[0]["ticketID"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByTicketID[0]["ticketID"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["ticketID"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="https;//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Chelsea Market' rel='stylesheet'>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <title>Ticket Cart</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/tooplate-main.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
	
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<link href="main.css" rel="stylesheet" media="all">
	
	    <!-- Icons font CSS-->
    <link href="mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="select2/select2.min.css" rel="stylesheet" media="all">
    <link href="datepicker/daterangepicker.css" rel="stylesheet" media="all">
	
	    <!-- Jquery JS-->
    <script src="jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="select2/select2.min.js"></script>
    <script src="datepicker/moment.min.js"></script>
    <script src="datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../global.js"></script>
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
</HEAD>
<BODY
<!-- Navigation -->
    
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" style="font-family: 'Chelsea Market'">
      <div class="container">

        <a class="navbar-brand" href="#"><img style = "height: 75px" src="../assets/images/zootopika logo.jpg" alt=""></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home
              </a>
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
			<li class="nav-item">
              <a class="nav-link" href="ticket.php">Buy Tickets
			    <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
	
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>

<a id="btnEmpty" href="index.php?action=empty">Empty Cart</a> &emsp;

<!--<a id="btnEmpty" style="float: left" href="index.php?action=empty">Next</a>-->

<?php
if(isset($_SESSION["cart_item"])){
    $visitorQuantity = 0;
    $visitorTotal = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Ticket Name</th>
<th style="text-align:left;">TicketID</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["ticketName"]; ?></td>
				<td><?php echo $item["ticketID"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "RM ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "RM ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="index.php?action=remove&ticketID=<?php echo $item["ticketID"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$visitorQuantity += $item["quantity"];
				$visitorTotal += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $visitorQuantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "RM ".number_format($visitorTotal, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>


	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM ticket");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>

	<?php
		}
	}
	?>
	<div class="card-body">
                    <form method="POST" id="contact" action = "processBook.php" >
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-5">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="visitorName" placeholder="Name" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
							<div class = "name">Date</div>
								<div class="value">
								<div class="row row-space">
									<div class="col-5">
										<div class="input-group-desc">
											<input type="date" id="date-input" name= "visitorDate" placeholder="Date" required="">
										</div>
									</div>
								</div>
								</div>
						</div>
						
                        <div class="form-row m-b-55">
                            <div class="name">Email</div>
                            <div class="value">
							<div class="row row-space">
								<div class="col-5">
                                <div class="input-group-desc">
                                    <input class="input--style-5" type="email" name="visitorEmail" required = "" placeholder= "Email">
                                </div>
								</div>
							</div>	
                            </div>
                        </div>
						
                        <div class="form-row m-b-55">
                            <div class="name">Contact</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-5">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="visitorContact" placeholder="Contact Number" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					
					<?php 
						echo '<input type="hidden" value="'.$visitorQuantity.'" name="visitorQuantity">'; 
						echo '<input type="hidden" value="'.$visitorTotal.'" name="visitorTotal">';
					?>
						<div>
                            <button class="btn btn--radius-2 btn--green" type="submit" name = "checkout" id="form-submit">CHECKOUT</button>
                        </div>			
                </form>
	
	<!--<form style="display:inline-block" action="processBook.php" method="post" >
</form>-->
<!-- Main Footer Starts Here -->
		<footer class="footer-distributed">

			<div class="footer-right">
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
					  <br>68000 Ampang, Selangor</p>
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
	</div>
    <!-- Sub Footer Ends Here -->


    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/owl.js"></script>


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
</BODY>
</HTML>