<?php

	session_start();
	
	mysql_connect("localhost","root","");
	mysql_select_db("1080");


	function loggedin()
	{

	 if(isset($_SESSION['username']) || isset($_COOKIE['username']))
	 {

		$loggedin = TRUE;
		return $loggedin;
	

	 }



	}

?>
