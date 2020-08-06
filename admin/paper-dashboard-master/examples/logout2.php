<?php
    include 'index.php';
    //start of checking if user is logged in code
    if (!valid_credentials) {
    header('Location: login.php');
    exit();
    }

$_SESSION['user'] = 'username';


if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
    //end of logged in code and starting a session

$query = "SELECT * FROM people";
$result = mysql_query($query);
While($person = mysql_fetch_array($result)) {
    echo "<h3>" . $person['Name'] . "</h3>";
    echo "<p>" . $person['Description'] . "</p>";
    echo "<a href=\"modify.php?id=" . $person['ID']. "\">Modify User</a>";
    echo "<span> </span>";
    echo "<a href=\"delete.php?id=" . $person['ID']. "\">Delete User</a>";
}
?>
<h1>Create a User</h1>
<form action="index.php" method="post">
    Name<input type ="text" name="inputName" value="" /><br />
    Description<input type ="text" name="inputDesc" value="" />
    <br />
    <input type="submit" name="submit" />