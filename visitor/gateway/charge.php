<?php
  require_once('../../vendor/autoload.php');
  include "../cart/book.php";

  \Stripe\Stripe::setApiKey('sk_test_51HXhtADE5aCcnduXsHfAY3hO0iDzHuLk22HkdxF78HNgPRc859PELEGm8BbV3JNPBXT9SZ9VV9lmZCATZyVXzQhM00tCYWWPZD');

 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
 $token = $POST['stripeToken'];
 $email = $POST['email'];
 $price = $POST['amountToPay'];
 
// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => $price,
  "currency" => "myr",
  "description" => "Zootopika Ticket Payment",
  "customer" => $customer->id
));

$con = mysqli_connect("localhost","web38","web38","zootopikadb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
	
 //collect data from post array
 $visitorName = $_POST['visitorName'];
 $visitorContact = $_POST['visitorContact'];
 $visitorDate = $_POST['visitorDate'];
 $visitorQuantity = $_POST['visitorQuantity'];
 $visitorTotal = $_POST['visitorTotal'];
 
 //$visitorReference=$visitorName.$visitorDate;
 
 //$_SESSION["cart_item"] as $item){
 //$item_price = $item["quantity"]*$item["price"];
 
 
 
  $sql="INSERT INTO pending(visitorReference, visitorName, visitorEmail, visitorContact, visitorDate, visitorQuantity, visitorTotal)
	VALUES ('$charge->id','$visitorName','$email','$visitorContact','$visitorDate','$visitorQuantity','$visitorTotal')";
 
  echo $sql;
	$qry = mysqli_query($con,$sql);
 mysqli_query($con,$sql);

$to = $email;
$subject = 'Zootopika | Ticket Payment Received';
$message = 

'Thank you for purchasing your tickets with Zootopika. 
Below is the reference for your payment:
	
	Name: '.$visitorName.'
	Ticket quantity: '.$visitorQuantity.'
	Amount: RM '.number_format($visitorTotal, 2).'
	
    Description: Zoo Negara Tickets Payment
	
Payment confirmation will take at least 12 hours.
We will send you an email once your payment is confirmed.
            
     
    ';
$headers = 'From: zootopika@gmail.com';

mail($to, $subject, $message, $headers);


// Redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);