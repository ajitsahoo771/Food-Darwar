function Editprofilevalidate() {
	/*VALIDATION FOR USERNAME*/
	var name = document.getElementById("name").value;
	var n = name.length;
	var u = document.Editprofile.name.value;
	if(u=="") {
		alert("PLEASE ENTER YOUR NAME");
		return false;
	}
	else if(n<4||n>18) {
	alert("NAME SHOULD BE OF 4-18 CHARACTERS");
	return false;
	}
	
	/*VALIDATION FOR EMAIL*/
	var x = document.Editprofile.Email.value;  
	var atposition = x.indexOf("@");   
	if (atposition<1){  
		alert("PLEASE ENTER A VALID EMAIL ADDRESS IN THE FORMAT OF anyname@example.com ");  
		return false;  
	}  
	
	/*VALIDATION FOR PHONE NUMBER*/
	var phonenumber = document.getElementById("phonenumber").value;
	var pn1 = phonenumber.length;
	var pn2 = document.Editprofile.phonenumber.value;
	if(pn2=="")
	{
		alert("PLEASE ENTER YOUR PHONE NUMBER");
		return false;
	}
	else if(pn1!=10)
	{
		alert("PLEASE ENTER A VALID PHONE NUMBER");
		return false;
	}
	else
	{
	return true;
	}
}