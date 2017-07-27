<?php

	include 'function.php';

	if(loggedin())
	{
		header("Location: userarea.php");
		exit();
	}	

	if($_POST['login'])
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$rememberme = $_POST['rememberme'];


			
			$login = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'");
			
					$rows = mysql_num_rows($login);
			if($rows == 1){

					if($rememberme=="on")
						
						setcookie("username",$username,time()+7200);
					
					else
							$_SESSION['username']=$username;


					//header("Location: userarea.php");
						?>
					<script type="text/javascript">
					parent.location.href = 'userarea.php';
					</script>
					<?php
					exit();



				}
				else
					die("incorrect");


			
		
				
		
		
	}


?>



