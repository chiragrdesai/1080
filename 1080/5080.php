<?php
//Create a session
session_start();
//Make a connection to the database
$dbh=mysql_connect ("localhost", "root", "your password") or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ("yourDatabaseName");
$user="";
$password="";
//Retrieve the form elements values
if (isset($_POST['user']))
  $user = $_POST['user'];

if (isset($_POST['password']))
{
  $password = $_POST['password'];
}
if (isset($_GET['user']))
{
  $user = $_GET['user'];
}
if (isset($_GET['password']))
{
  $password = $_GET['password'];
}
//If login is not blank retrieve user information
if($user!="" || $password !="")
{
$query ="SELECT * FROM users WHERE userName='".$user."' AND password='".$password."'";
$result = mysql_query($query, $dbh);
$affected_rows =mysql_num_rows($result);
//If match found then login succeeded. Set session
if ($affected_rows==1)
{
  $_SESSION['user'] = $user;
  print "<center>Login successful, you can redirect to another web site using header variable of php if the login is validated like know.<br>I am sure You can figure out that.</center>";
}
else
{
//If match not found, inform the user
  print "<center><font color=red>Incorrect username or password or both. Try again.</fon></center>";
}
}
else
{
  print "<center><b>Please Login</b></center>";
}
?>
<form name="loginForm" action="login.php" method="post">
<table width="100%">
<tr>
<td align="center" class="text">Username:</td>
</tr>
<tr>
<td align="center" class="text"><input type="text" name="user" size="15" maxlenght="20"></td>
</tr>
<tr>
<td align="center" class="text">Password:</td>
</tr>
<tr>
<td align="center" class="text"> <input type="password" name="password" size="15" maxlenght="20"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="Login" value="Login"></td>
</tr>
</table>
</form>