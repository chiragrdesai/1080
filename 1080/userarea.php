<?php

	include 'function.php';
	
	if(!loggedin())
	{
		header("Location: UntitledFrameset-10.htm");
		exit();
	}
	
?>
welcome to 1080. . . <p />
<a href="logout.php">logout</a>