<?php
include "book.php";
if(isSet($_POST['updateBook']))
	{
		updateBookInformation();
		header("refresh:1; url=../ticket/ticketList.php" );
	}

if(isSet($_POST['deleteBook']))
	{
	deleteBook();
	echo "<script>";
	echo " alert('Booking record has been deleted.');
		</script>";
	header( "refresh:1; url=../ticket/ticketList.php" );
	}
?>