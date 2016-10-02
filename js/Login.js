function loginvalidate(){
var password = document.getElementById("password").value;
var n = password.length;
var p = document.login.password.value;
var x = document.login.email.value;  
	var atposition = x.indexOf("@");  
	var dotposition = x.lastIndexOf(".");  
	if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
		alert("PLEASE ENTER A VALID EMAIL ADDRESS IN THE FORMAT OF anyname@example.com ");  
		return false;  
	}  
	else if(p=="") {
		alert("PLEASE ENTER YOUR PASSWORD");
		return false;
	}
	else if(n<4||n>8) {
		alert("PASSWORD SHOULD BE OF 4-8 CHARACTERS");
		return false;
	}
	else {
		return true;
	}
}