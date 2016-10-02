<?php
session_start();
if(isset($_SESSION['Regdno']))
{
	header("location:ban1.php");
}
else
{
?>

<html>
    
        <body bgcolor="#D17519">
     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
 
<center>
        
     <br> <img src="Food_Barnstar_Hires.png" style="width:150px;height:150px">


          </center>


<center>
        <font face="" size="6" color="#BFFF00">
      Login to your account
        </font>

</center>



    



<x align="line">

 
 

<table>
  
<tr>
			<th align="left">Regd no:</th>
			<td align="left"><input type="user id" maxlength="12"  name="userid"></td>
		</tr></BR>
		<tr>
			<th align="left"> Password:</th>
			<td align="left"><input type="password" maxlength="8" name="password"></td>
		</tr></BR>
		
		<tr>
			<td></td>
			<td></td>
			<td align="left"><input type="submit" name="submit"></td>
		</tr></BR>
	</table>

  <a style="text-decoration:none" href="reg.php">REGISTER YOUR ACCOUNT</a>


</form>
  </body></html>
  
  
  <?php

$con=mysql_connect("localhost","root","");
mysql_select_db("regestration",$con);

if(isset($_POST['submit']))
	{
		$a=$_POST['userid'];
		$d=$_POST['password'];

		$login=mysql_query("select * from regd where Regdno='$a' and Password='$d'");
		$row=mysql_fetch_array($login);
		     
			if(mysql_num_rows($login) !=0)

			{
				
				$_SESSION['Regdno']=$_POST['userid'];
				
header("Location:ban1.php", true, 301);
exit();

			}

			else
			{
				
				header("location:ban.php");
				echo "enter correct password";
			}
	}
    }

?>

