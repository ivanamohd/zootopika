<?php
	
	include "admin.php";
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
	echo '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">';
	$qry = getAdminInformation($name);
	$staffInfo = mysqli_fetch_assoc($qry);
	$name = $staffInfo['name'];
	$fname = $staffInfo['fname'];
	$lname = $staffInfo['lname'];
	$contact = $staffInfo['contact'];
	$email = $staffInfo['email'];
	
	echo '<div class="w3-card-4">';
	echo '<div class="w3-container w3-brown">';
    echo '<h2> Update Staff </h2>';
	echo '</div>';
	echo '<form class="w3-container" action="processAdmin.php" method = "POST">';
    echo '<p>';
    echo '<label class="w3-text-brown"> Staff ID </label>';
    echo "<input class='w3-input w3-border w3-sand' name='name' type='text' value = '$name' readonly></p>";
    echo '<p>';
	echo '<label class="w3-text-brown"> Staff ID </label>';
    echo "<input class='w3-input w3-border w3-sand' name='fname' type='text' value = '$fname'></p>";
    echo '<p>';
    echo '<label class="w3-text-brown"> Staff Name </label>';
    echo "<input class='w3-input w3-border w3-sand' name='lname' type='text' value = '$lname'></p>";
	echo '<label class="w3-text-brown"> Staff Contact </label>';
    echo "<input class='w3-input w3-border w3-sand' name='contact' type='text' value = '$contact'></p>";
	echo '<label class="w3-text-brown"> Staff Email </label>';
    echo "<input class='w3-input w3-border w3-sand' name='email' type='text' value = '$email'></p>";
    echo '<p>';
    echo "<input class = 'w3-btn w3-brown' type = 'submit' name = 'saveButton' value = 'Update'</p>";
	echo '</form>';
	echo '</div>';
	
	/*include "admin.php";
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
	echo '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">';
	$qry = getAdminInformation();
	$adminInfo = mysqli_fetch_assoc($qry);
	$adminName = $adminInfo['adminName'];
	$adminFN = $adminInfo['adminFN'];
	$adminLN = $adminInfo['adminLN'];
	$adminEmail = $adminInfo['adminEmail'];
	$adminContact = $adminInfo['adminContact'];
	$adminAbout = $adminInfo['adminAbout'];
	
	echo '<div class="w3-card-4">';
	echo '<div class="w3-container w3-brown">';
    echo '<h2> Update Staff </h2>';
	echo '</div>';
	echo '<form class="w3-container" action="processAdmin.php" method = "POST">';
    echo '<p>';
    echo '<label class="w3-text-brown"> Staff Name </label>';
    echo "<input class='w3-input w3-border w3-sand' name='adminName' type='text' value = '$adminName' readonly></p>";
    echo '<p>';
    echo '<label class="w3-text-brown"> Staff FN </label>';
    echo "<input class='w3-input w3-border w3-sand' name='adminFN' type='text' value = '$adminFN'></p>";
	echo '<label class="w3-text-brown"> Staff LN </label>';
    echo "<input class='w3-input w3-border w3-sand' name='adminLN' type='text' value = '$adminLN'></p>";
	echo '<label class="w3-text-brown"> Staff Email </label>';
    echo "<input class='w3-input w3-border w3-sand' name='adminEmail' type='text' value = '$adminEmail'></p>";
    echo '<p>';
	echo '<label class="w3-text-brown"> Staff Contact </label>';
    echo "<input class='w3-input w3-border w3-sand' name='adminEmail' type='text' value = '$adminContact'></p>";
    echo '<p>';
	echo '<label class="w3-text-brown"> Staff About </label>';
    echo "<input class='w3-input w3-border w3-sand' name='adminEmail' type='text' value = '$adminAbout'></p>";
    echo '<p>';
    echo "<input class = 'w3-btn w3-brown' type = 'submit' name = 'saveButton' value = 'Update'</p>";
	echo '</form>';
	echo '</div>';
	*/
	
	
?>