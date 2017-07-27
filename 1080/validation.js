// JavaScript Document
function check()
	{
		var form = document.reg;
		if(form.fname.value == "" || form.lname.value == "" || form.add.value == "" || form.country.value == "Select Country" || form.state.value == "" || form.city.value == "" || form.phone.value == "" || form.username.value == "username" || form.password.value == "" || form.email.value == "" || form.bdate.value == "")
		{
			alert("please enter suffcient data for the registration"); 
			return false;
		}
		else
			return true;
	}
	function checkphone()
	{
		var form = document.reg;
		if(form.phone.value.length <= 5)
		{
			alert("enter valid phone number");
			form.phone.focus();
			exit(0);
		}

		
		if(isNaN(form.phone.value))
		{
			alert("can not enter character in phone number");
			form.phone.focus();
			
		}
	}
	function checkcity()
	{
		var form = document.reg;	
		if(!isNaN(form.city.value))
		{
			alert("can not write numbers and special symbols like ()<>?/:!@#$%^&*+-*/{} etc");
			form.city.focus();
			exit(0);

		}
		
	}
	function checkstate()
	{
		var form = document.reg;	
		if(!isNaN(form.state.value))
		{
			alert("can not write numbers and special symbols like ()<>?/:!@#$%^&*+-*/{} etc");
			form.state.focus();
			exit(0);

		}
		
	}
	function checkmail() 
	{
		
		var mail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		var form  = document.reg; 
		if(mail.test(form.email.value) == false) 
		{
		  alert("Enter valid Email Address");
		  form.email.focus();
		  return false;
		}
	}
	function checkdate()
	{
		var d = /^([0-9]{2})+\/([0-9]{2})+\/([0-9]{4})$/;
		var form = document.reg;
		if (d.test(form.bdate.value) == false)
		{
			alert("enter date in DD/MM/YYYY format");
			form.bdate.focus();
			exit(0);
		}
	}

function checksearch()
	{
		var form = document.searchform;
		if(form.cat.value == "Select category to search")
		{
			if(form.item.value == "search for the selected category here......" || form.item.value == " ")
			{
				alert("please select category and enter something to search");
				return false;
				exit(0);
			}
			else
			{
				alert("please select category to search");
				return false;
				exit(0);
			}
		}
		else if(form.item.value == "search for the selected category here......" || form.item.value == " ")
		{
			alert("please enter something to search");
			return false;
			exit(0);
		}
		else
			return true;
	}

	function checktest()
	{
		var f = document.form;	
		if(f.test.value == "")
		{
				alert("plerase enter something to post");
				return false;
				exit(0);
		}
		return true;
	}
	
	