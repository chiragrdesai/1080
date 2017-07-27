<?php

$host="localhost"; // Host name
$db_name="1080"; // Database name
$tbl_name="abc"; // Table name


include 'function.php';


// username and password sent from form
$myusername=$_POST['username'];
$mypassword=$_POST['password'];
$mycpassword=$_POST['cpassword'];
$myemail=$_POST['email'];
$mycity=$_POST['city'];
$mystate=$_POST['state'];
$mycountry=$_POST['country'];
$mymob=$_POST['mob'];
$myadd=$_POST['address'];


	if($myusername&&$mypassword&&$myemail&&$mycity&&$mystate&&$mycountry&&$mymob&&$myadd&&$mycpassword)
	{


	if($mypassword==$mycpassword)
	{
	$sql="insert into abc(username,password) values(\"$myusername\",\"$mypassword\")";
	mysql_query($sql);


	$sq="insert into register(username,email,address,city,state,country,mob) values(\"$myusername\",\"$myemail\",\"$myadd\",\"$mycity\",\"$mystate\",\"$mycountry\",$mymob)";
	mysql_query($sq);
	}
	else
		echo "passwords do not match"
	}
	else
		echo "please fill in the all fields";



?>