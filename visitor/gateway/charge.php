<?php
  require_once('../../vendor/autoload.php');


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

$sql = "UPDATE `payment` SET `transactionID` = '.$charge->id.', `paymentMethod` = 'Stripe - Credit Card', `status` = '2' WHERE `payment`.`userID` = '".$_POST['userID']."'";
mysqli_query($con, $sql);

$to = $email;
$subject = 'Zootopika | Ticket Payment Confirmed';
$message = 'Thank you for purchasing your tickets with Zootopika. 
            Below is the reference for your payment.

            Amount: RM1200
            Description: Zoo Negara Tickets Payment
            Reference: '.$charge->id.'
            
     
    ';
$headers = 'From: zootopika@gmail.com';

mail($to, $subject, $message, $headers);


// Redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);