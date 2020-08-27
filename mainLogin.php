<!DOCTYPE html>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
.btn-group .dropdown-menu a{
    color:#fff;
}

.btn-default .dropdown-menu {
  color: #000 !important;
}
.btn-default .dropdown-menu li > a:hover,
.btn-default .dropdown-menu li > a:focus {
  background-color: #000 !important;
  color:#fff !important;
}
.btn-group-danger .dropdown-menu {
  background-color: #d64742 !important;
}
.btn-group-danger .dropdown-menu li > a:hover,
.btn-group-danger .dropdown-menu li > a:focus {
  background-color: #d64742 !important;
  color:#f2c572 !important;
}

#app-cover
{
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    width: 300px;
    height: 42px;
    margin: 100px auto 0 auto;
}

.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

li{
	width: 370px;
	height: 40px;
	font-size: 18px;
	text-align: center;
	letter-spacing: 3px;
}

</style>
</head>
<body style="background-image: url('bg.jpg')">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div role="main" class="container theme-showcase">

  <div class="page-header">
      <h1 style="color:white; letter-spacing: 2px; font-family: 'Alef';">Welcome to Zootopika Web</h1>
  </div>
  
  <p>

  <!-- </p><div class="btn-group">
	  <button class="btn btn-default btn-lg" type="button">Default</button>
	  <button data-toggle="dropdown" class="btn btn-default btn-lg dropdown-toggle" type="button">
		  <span class="caret"></span></button>
	  <ul class="dropdown-menu">
		  <li><a href="#">Action</a></li>
		  <li><a href="#">Another action</a></li>
		  <li><a href="#">Something else here</a></li>
		  <li class="divider"></li>
		  <li><a href="#">Separated link</a></li>
	  </ul>
  </div> -->

	<br><br><br><br><br>
   <div class="btn-group btn-group-danger center">
	  <button class="btn btn-danger btn-lg" type="button" style="width: 370px; height: 60px; letter-spacing: 3px;"> PLEASE SELECT </button>
	  <button data-toggle="dropdown" class="btn btn-danger btn-lg dropdown-toggle" type="button" style="width: 50px; height: 60px">
		  <span class="caret"></span></button>
	  <ul class="dropdown-menu">
		  <li style="margin-top: 12px;"><a href="admin/examples/login/index.php">ADMIN</a></li>

		  <li class="divider"></li>
		  <li style="margin-top: 18px; margin-bottom: 5px;"><a href="staff/examples/login/index.php">STAFF</a></li>
	  </ul>
  </div>
</html>
 