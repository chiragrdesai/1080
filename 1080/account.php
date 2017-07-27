<?php
	include('connect.php');
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$addr = $_POST['addr'];
	$country = $_POST['country'];
	$state = $_POST['state'];
	
	$phone = $_POST['phone'];
	
	$mail = $_POST['email'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	$result2 = mysql_query("update register set fname = '$fname', lname = '$lname', addr = '$addr',country = '$country',state = '$state',phone = '$phone',email='$mail' where username = '$user'");
	$result3 = mysql_query("update login set password = '$pass' where username = '$user'");
	header("Location: myaccount.php");
?>