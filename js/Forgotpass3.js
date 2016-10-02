function forgotpass3validate()
{
	var password = document.getElementById("password").value;
	var m=password.length;
	var v = document.forgot3.password.value;
	if(m=="") {
	alert("PLEASE ENTER YOUR NEW PASSWORD");
	return false;
	}
	else if(m<4||m>8) {
		alert("PASSWORD SHOULD BE OF 4-8 CHARACTERS");
		return false;
	}
	else{
	return true;
	}

}