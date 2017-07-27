<?php

$host="localhost"; // Host name
$db_name="1080"; // Database name
$tbl_name="abc"; // Table name


include 'function.php';


// username and password sent from form
$myusername=$_POST['username'];
$mypassword=$_POST['password'];
$myemail=$_POST['email'];
$mycity=$_POST['city'];
$mymob=$_POST['mob'];


$sql="insert into abc(username,password) values(\"$myusername\",\"$mypassword\")";
mysql_query($sql);


$sq="insert into register(username,email,city,mob) values(\"$myusername\",\"$myemail\",\"$mycity\",$mymob)";
mysql_query($sq);


?>