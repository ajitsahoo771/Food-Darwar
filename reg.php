<html>
<head>
</head>
<body bgcolor="#D17519">
<hr size="2" color="red">


 
    
<font face="Monotype Corsiva" size="3" color="white">
		<div id="register" class="animate form">
			<form  action="insert.php" autocomplete="on" method="POST"> 
				<h1> REGISTRATION FORM </h1> 
				<table>
				<tr>
				<td> 
					<label for="usernamesignup" class="uname" data-icon="u" size='3'>Your name</label>
				</td>
				<td>
					<input id="usernamesignup" name="username" required="required" type="text" placeholder="******* ********" />
				</td> 
				</tr>
				<tr>
				<td>
					<label for="usernamesignup" class="uname" data-icon="u">Your username</label>
				</td>
				<td>
					<input id="usernamesignup" name="regdno" required="required" type="text" placeholder="cutm reg no" />
				</td>
				</tr>
				<tr>
				<td>
					<label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
				</td>
				<td>
					<input id="emailsignup" name="email" required="required" type="email" placeholder="************@cutm.ac.in"/> 
				</td>
				</tr>
				<tr>
				<td>
					<label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
				</td>
				<td>
					<input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
				</td>
				</tr>
				<tr>
				<td>
					<label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Confirm your password </label>
				</td>
				<td>
					<input id="passwordsignup_confirm" name="confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
				</td>
				</tr>
				<tr>
				<td>
					<input type="submit" name="submit" /> 
				</td>
				</tr>
				</table>
				
			</form>

    
   
</body></html>