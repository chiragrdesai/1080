<?php
		
	session_start();


	session_destroy();

	setcookie("username","",time()-7200);
	
	header("Location: UntitledFrameset-10.htm");

?>