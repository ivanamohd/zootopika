<?php
include "ticket.php";
if(isSet($_POST['updateTicket']))
	{
		updateTicketInformation();
		header("refresh:1; url=ticketList.php" );
	}

if(isSet($_POST['deleteTicket']))
	{
	deleteTicket();
	echo "<script>";
	echo " alert('Ticket record has been deleted.');
		</script>";
	header( "refresh:1; url=ticketList.php" );
	}
?>