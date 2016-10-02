function forgotpass1validate(){
	var x = document.forgot1.email.value;  
	var atposition = x.indexOf("@");  
	var dotposition = x.lastIndexOf(".");  
	if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
		alert("PLEASE ENTER A VALID EMAIL ADDRESS IN THE FORMAT OF anyname@example.com ");  
		return false;  
	}  
	else {
		return true;
	}
}