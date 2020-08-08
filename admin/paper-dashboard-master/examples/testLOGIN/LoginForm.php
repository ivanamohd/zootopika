<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid lightblue;
  box-sizing: border-box;
}

button {
  background-color: lightblue;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}


button:hover {
  opacity: 0.6;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
  color:white;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
</html>

<?php
//LoginForm.php
echo '<h2>Login page</h2>';
echo '<p>*Hi, welcome to the Login Page</p>';

echo '<form action="checkLogin.php" method="post">';

  echo '<div class="container">';
    echo '<label for="id"><b>ID</b></label>';
    echo '<input type="text" placeholder="Enter your ID" name="username" required>';

    echo '<label for="psw"><b>Password</b></label>';
    echo '<input type="password" placeholder="Enter Password" name="password" required>';
        
    echo '<br><br><input type="submit" name="loginButton" value="Login">';
  echo '</div>';

  echo '<div class="container" style="background-color:#f1f1f1">';
    echo '<button type="button" class="cancelbtn">Cancel</button>';
  echo '</div>';
echo '</form>';
?>

<html>
<body>
<div class="w3-container w3-cell" style = "center">
	<p>Don't have an account?<br></p>
	<a class = 'w3-btn w3-brown' href = "http://localhost/ProjectSTS/RegisterPage.php" > REGISTER NOW! </a> </p>
	</div>
</body>

</html>