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
		
		echo "you have sucessfully registered..." ?> <a href="UntitledFrameset-10.htm">click here</a> <?php echo" to back to login page";
		}
		else
		echo "passwords do not match";
	}
	else
		echo "please fill in the all fields";



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>registration</title>

<style type="text/css">
form {
	width:1000px;
	border:1px solid #ccc;
}
fieldset {
	border:0;
	padding:10px;
	margin:10px;
	position:relative;
}
label {
	display:block;
	font:normal 12px/17px verdana;
}
input {width:160px;}


span.hint {
	font:normal 11px/14px verdana;
	background:#eee url(bg-span-hint-gray.gif) no-repeat top left;
	color:#444;
	border:1px solid #888;
	padding:5px 5px 5px 40px;
	width:250px;
	position:absolute;
	margin: -12px 0 0 14px;
	display:none;
}


fieldset.welldone span.hint {
	background:#9fd680 url(bg-span-hint-welldone.jpg) no-repeat top left;
	border-color:#749e5c;
	color:#000;
}
fieldset.kindagood span.hint {
	background:#ffffcc url(bg-span-hint-kindagood.jpg) no-repeat top left;
	border-color:#cc9933;
}


fieldset.welldone {
	background:transparent url(bg-fieldset-welldone.gif) no-repeat 424px 6px;
}
fieldset.kindagood {
	background:transparent url(bg-fieldset-kindagood.gif) no-repeat 424px 6px;
}


</style>

<script type="text/javascript">

// This function checks if the username field
// is at least 6 characters long.
// If so, it attaches class="welldone" to the 
// containing fieldset.

function checkUsernameForLength(whatYouTyped) {
	var fieldset = whatYouTyped.parentNode;
	var txt = whatYouTyped.value;
	if (txt.length > 5) {
		fieldset.className = "welldone";
	}
	else {
		fieldset.className = "";
	}
}


function checkmob(whatYouTyped) {
	var fieldset = whatYouTyped.parentNode;
	var txt = whatYouTyped.value;
	if (txt.length == 10) {
		fieldset.className = "welldone";
	}
	else {
		fieldset.className = "";
	}
}


// If the password is at least 4 characters long, the containing 
// fieldset is assigned class="kindagood".
// If it's at least 8 characters long, the containing
// fieldset is assigned class="welldone", to give the user
// the indication that they've selected a harder-to-crack
// password.

function checkPassword(whatYouTyped) {
	var fieldset = whatYouTyped.parentNode;
	var txt = whatYouTyped.value;
	if (txt.length > 3 && txt.length < 8) {
		fieldset.className = "kindagood";
	} else if (txt.length > 7) {
		fieldset.className = "welldone";
	} else {
		fieldset.className = "";
	}
}


function confirmPassword(whatYouTyped){
	var fieldset = whatYouTyped.parentNode;
	oForm = document.forms[0];
	var txt = whatYouTyped.value;
	var c= oForm.elements["password"].value;
	if (txt==oForm.elements["password"].value) {
		fieldset.className = "welldone";
	} else {
		fieldset.className = "";
	}
}

// This function checks the email address to be sure
// it follows a certain pattern:
// blah@blah.blah
// If so, it assigns class="welldone" to the containing
// fieldset.

function checkEmail(whatYouTyped) {
	var fieldset = whatYouTyped.parentNode;
	var txt = whatYouTyped.value;
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(txt)) {
		fieldset.className = "welldone";
	} else {
		fieldset.className = "";
	}
}




// this part is for the form field hints to display
// only on the condition that the text input has focus.
// otherwise, it stays hidden.

function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      oldonload();
      func();
    }
  }
}


function prepareInputsForHints() {
  var inputs = document.getElementsByTagName("input");
  for (var i=0; i<inputs.length; i++){
    inputs[i].onfocus = function () {
      this.parentNode.getElementsByTagName("span")[0].style.display = "inline";
    }
    inputs[i].onblur = function () {
      this.parentNode.getElementsByTagName("span")[0].style.display = "none";
    }
  }
}
addLoadEvent(prepareInputsForHints);

</script>

</head>
<body>
<h1>Registration form</h1>
<form  method="post" action="http://localhost/regi.php">

<fieldset>

choose a username:
<input type="text" name="username" onkeyup="checkUsernameForLength(this);" />
	<span class="hint">Usernames must be a least 6 characters in length.</span>
</fieldset>
<fieldset>
choose a password:
<input type="password" name="password" onkeyup="checkPassword(this);" />
	<span class="hint">The password can be any combination of characters, and must be at least 4 characters in length.  8 characters recommended!</span>
</fieldset>
<fieldset>
	confirm a password:
	<input
		type="password"
		id="cpassword"
		name="cpassword"
		onkeyup="confirmPassword(this);" />
	<span class="hint">confirm the password you just typed that must match above password</span>

</fieldset>
<fieldset>
	Enter your email address:
	<input
		type="varchar"
		id="email"
		name="email"
		onkeyup="checkEmail(this);" />
	<span class="hint">You can enter your real address without worry - we don't spam!</span>
</fieldset>

<fieldset>

	<label>Enter your address:</label>

	<textarea rows = "3" columns = "50" name = "address"></textarea>
	
</fieldset>

<fieldset>
	Enter your city:
	<input
		type="text"
		name="city"
		id="city"
		 />
	

</fieldset>
<fieldset>

	choose your state:
	<select name="state">
	<option name = "select state">select state</option>
	<option name = "aandhrap">aandhrap</option>
	<option name = "gujrat">gujrat</option>
	<option name ="tamilnadu"> tamilnadu</option>
	<option name ="panjab"> panjab</option>
	<option name ="u.p."> u.p.</option>
	<option name ="rajasthan"> rajasthan</option>
	<option name ="kashmir"> kashmir</option>
	<option name ="karnataka"> karnataka</option>
	<option name ="kerala"> kerala</option>
	<option name ="madhyapradesh"> madhyapradesh</option>
	</select>
			 	

</fieldset>
<fieldset>
	choose your country:
	<select name = "country">
			<option name = "select country">Select Country</option>
			<option name = "india">india</option>
			<option name = "usa">usa</option>
			<option name = "france">france</option>
			<option name = "japan">japan</option>
			<option name = "others">others</option>
		</select>
</fieldset>

<fieldset>
	Enter your mobile number:
	<input
		type="text"
		id="mob"
		name="mob"
		onkeyup="checkmob(this);" />
	<span class="hint">number should be only of 10 digit....no need to add +91 or 0</span>
</fieldset>


<fieldset>

<input type="submit" name="submit" value="log in"><p />
</fieldset>
</form>
</body>
</html>