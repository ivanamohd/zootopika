<?php
include "book.php";

if(isSet($_POST['pay']))
	{
	addNewBook();
	echo "<script>";
	echo " alert('added.');
		</script>";
	//header( "refresh:1; url=next.php" );
	}
?>