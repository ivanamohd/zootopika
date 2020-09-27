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
<TITLE>Simple PHP Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />

<!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="https;//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Chelsea Market' rel='stylesheet'>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/tooplate-main.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/flex-slider.css">
	
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</HEAD>
<BODY>
<!-- Navigation -->
    
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" style="font-family: 'Chelsea Market'">
      <div class="container">

        <a class="navbar-brand" href="#"><img style = "height: 75px" src="../assets/images/zootopika logo.jpg" alt=""></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../index.html">Home</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="../about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../map.html">Map</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../feedback/contact.php">Contact Us</a>
            </li>
			<li class="nav-item active">
              <a class="nav-link" href="index.php">Buy Tickets</a>
			  <span class="sr-only">(current)</span>
            </li>
          </ul>
        </div>
      </div>
    </nav>

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
				<td  style="text-align:right;"><?php echo "RM ". number_format($item["price"],2); ?></td>
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
    <div class="contact-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Fill in your information</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div id="picture">
            		
			<img src="assets1/img/zoo1.jpg" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></img>
            </div>
          </div>
	<div class="col-md-6">
            <div class="center-content">
              <div class="container">
	<form id="contact" action="processBook.php" method="post">
                  <div class="row">
                    <div class="col-md-12">
                      <fieldset>
                        <input type="text" class="form-control" placeholder="Name" name="visitorName" required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <br><input type="text" class="form-control" name="visitorEmail" placeholder="Email" required="">
                      </fieldset>
                    </div>
					<div class = "col-md-12">
					<fieldset>
                        <br><input type="text" class="form-control" name="visitorContact" placeholder="Contact number" required="">
                      </fieldset>
                    </div>
					<div class="col-md-12">
					<fieldset>
                        <br><input type="date" class="form-control" name="visitorDate" placeholder="Date" required="">
                      </fieldset>
                    </div>
					
					<?php 
						echo '<input type="hidden" value="'.$visitorQuantity.'" name="visitorQuantity">'; 
						echo '<input type="hidden" value="'.$visitorTotal.'" name="visitorTotal">';
					?>
					
                    <div class="col-md-12">
                      <fieldset>
						<br>
                        <button type="submit" id="form-submit" name="checkout" class="button">CHECKOUT</button>
                      </fieldset>
                    </div>				
                </form>
				</div>
		</div>
	</div>
	
	<!--<form style="display:inline-block" action="processBook.php" method="post" >
<input id="btnEmpty" type="submit" name="next" value="Next"> </input>
</form>-->

</BODY>
</HTML>