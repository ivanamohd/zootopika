<?php
  if(!empty($_GET['tid'] && !empty($_GET['product']))) {
    $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

    $tid = $GET['tid'];
    $product = $GET['product'];
  } else {
    header('Location: index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	
 <title>Thank You</title>
</head>
<body>

  <div class="container-mt-4">
	<div class="thicker">
	<h1>WE'VE RECEIVED YOUR BOOKING</h1>
    <h2>Thank you for purchasing your tickets at Zootopika!</h2>
    <hr>
    <p>You will receive an email confirmation shortly. Check your email for more info.</p>
    <p><a href="../index.html" class="btn btn-light mt-2" style="background-color: #32CD32; font-weight:bold;"  >Go Back</a></p>
	 <div id="picture">		
			<img src="css/panda.jpg" width="1280px" height="319px" frameborder="0"  style="border:0;" allowfullscreen=" " aria-hidden="false" tabindex="0"></img>
            </div>
			
  </div>
  </div>
</body>
</html>