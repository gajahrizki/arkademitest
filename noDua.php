<script type="text/javascript">
	function validation()
	{
		var name = document.getElementById('name').value;
		var age = document.getElementById('age').value;
		var username = document.getElementById('username').value;
		var len = name.length;
		if (name.length <= 2) 
		{
			document.getElementById('warn').innerHTML = "nameMustBeMoreThan3Words";
			document.getElementById('warn').style.color = "red";
			return false;
		}
		else if(name != name.toUpperCase() )
		{
			document.getElementById('warn').innerHTML = "nameMustBeUpperCase";
			document.getElementById('warn').style.color = "red";
			return false;
		}
		

		if (age == 0) 
		{
			document.getElementById('warn').innerHTML = "ageRequired";
			document.getElementById('warn').style.color = "red";
			return false;
		}else if(age > 100)
		{
			document.getElementById('warn').innerHTML = "ageTooLong";
			document.getElementById('warn').style.color = "red";
			return false;
		}

		if(username.search(/[a-z]/) == -4)
		{
			document.getElementById('warn').innerHTML = "usernameMustHave4LowerCase";
			document.getElementById('warn').style.color = "red";
			return false;
		}else if(username.search(/[.\_]/) == -1)
		{
			document.getElementById('warn').innerHTML = "usernameMustHaveAtLeast1(. or _) symbol";
			document.getElementById('warn').style.color = "red";
			return false;
		}else if(username.search(/[0-9]/) == -3)
		{
			document.getElementById('warn').innerHTML = "usernameMustHave3Numeric";
			document.getElementById('warn').style.color = "red";
			return false;
		}
		// if (!name.match(/^[a-z] == -4  *\s [.\_] == -1 * \s [0-9] == -3 *$ /)) 
		// {
		// 	document.getElementById('warn').innerHTML = "error";
		// 	document.getElementById('warn').style.color = "red";
		// 	return false;
		// }
	}
</script>