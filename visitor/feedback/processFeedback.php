<?php
include "feedback.php";

if(isSet($_POST['addFeedback']))
	{
	addNewFeedback();
	echo "<script>";
	echo " alert('Your message has been recorded. We will get back to you soon.');
		</script>";
	header( "refresh:1; url=contact.php" );
	}
?>