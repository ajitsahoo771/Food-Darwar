function changepassvalidate()
{
	var password = document.getElementById("password").value;
	var newpassword1 = document.getElementById("password1").value;
	var p = password.length;
	var m = password1.length;
	var u = document.Changepassword.password.value;
	var v = document.Changepassword.password1.value;
	if(u=="") {
	alert("PLEASE ENTER YOUR CURRENT PASSWORD");
	return false;
	}
	else if(p<4||p>8) {
		alert("CURRENT PASSWORD SHOULD BE OF 4-8 CHARACTERS");
		return false;
	}
	else if(v=="") {
	alert("PLEASE ENTER YOUR NEW PASSWORD");
	return false;
	}
	else if(m<4||m>8) {
		alert("NEW PASSWORD SHOULD BE OF 4-8 CHARACTERS");
		return false;
	}
	
	else{
	return true;
	}

}