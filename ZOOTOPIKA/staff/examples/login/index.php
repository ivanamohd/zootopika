<?php
session_start(); 
require_once('dbconnection.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Code for Registration 
if(isset($_POST['signup']))
{
	$staffName=$_POST['staffName'];
	$staffFN=$_POST['staffFN'];
	$staffLN=$_POST['staffLN'];
	$staffEmail=$_POST['staffEmail'];
	$staffPassword=$_POST['staffPassword'];
	$staffContact=$_POST['staffContact'];

	$msg=mysqli_query($con,"insert into staff(staffName,staffFN,staffLN,staffEmail,staffPassword,staffContact) values('$staffName','$staffFN','$staffLN','$staffEmail','$staffPassword','$staffContact')");
if($msg)
	echo "<script>alert('Registered successfully');</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Login System</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegent Tab Forms,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default',       
							width: 'auto', 
							fit: true 
						});
					});
				   </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700,200italic,300italic,400italic,600italic|Lora:400,700,400italic,700italic|Raleway:400,500,300,600,700,200,100' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="main">
		<h1 style="letter-spacing: 2px; font-family: 'Alef';">Staff Login</h1>
	 <div class="sap_tabs">	
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			  <ul class="resp-tabs-list">
				  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><div class="top-img"><img src="images/top-lock.png" alt=""/></div><span>Login</span></li>
				  <li class="resp-tab-item lost" aria-controls="tab_item-2" role="tab"><div class="top-img"><img src="images/top-key.png" alt=""/></div><span>Forgot Password</span></li>
				  <div class="clear"></div>
			  </ul>		
			  	 
			 <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
					 	<div class="facts">
							 <div class="login">
							<form name="login" action="checkLogin.php" method="post">
								<input type="text" class="text" name="staffName" value="" placeholder="Enter your username"  ><a href="#" class=" icon email"></a>

								<input type="password" value="" name="staffPassword" placeholder="Enter valid password"><a href="#" class=" icon lock"></a>

								<div class="p-container">
								
									<div class="submit two">
									<input type="submit" name="login" value="LOG IN" >
									</div>
									<div class="clear"> </div>
								</div>

							</form>
					</div>
				</div> 
			</div> 			        					 
				 <div class="tab-3 resp-tab-content" aria-labelledby="tab_item-2">
					 	<div class="facts">
							 <div class="login">
							<form action="" method="post">
								<input type="text" class="email" name="staffEmail" value="" placeholder="Enter your registered email" required  ><a href="#" class=" icon email"></a>
								<input type="password" class="password" name="staffPassword" value="" placeholder="Enter your password" required  ><a href="#" class=" icon lock"></a>
										<div class="submit three">
											<input type="submit" name="resetPassword" value="Send Email" >
										</div>
									</form>
									</div>
				         	</div>           	      
				        </div>	
				     </div>	
		        </div>
	        </div>

</body>
</html>

<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

    if (isset($_POST['resetPassword'])) {
    $to = $_POST['staffEmail'];
    $subject = 'Zootopika Notification | Forget Password';
    $message = '
 
        A request for password change has been activated.
        You can change your password by visiting the link below.


        Please click this link to reset your password:
        http://localhost/masterfolder_zootopika/ZOOTOPIKA/staff/examples/login/verify.php?staffEmail=' . $_POST['staffEmail'] . '&staffPassword=' . $_POST['staffPassword'] . '

        ';

    $headers = 'From: zootopika@gmail.com';
    if (mail($to, $subject, $message, $headers))
		echo "<script>alert('Email sent. Please check your inbox.');</script>";

    echo "<meta http-equiv='refresh' content='0;url=index.php'>";

    }

?>