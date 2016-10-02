<?php
session_start();
if(!isset($_SESSION['Regdno']))
{
	header("location:ban.php");
}
?>



<htm>


<body bgcolor="#D17519">
<form action="incomp.php" method="post">
 <center>
  <img src="3d_wooden_text_effect.png" style="width:330px;height:65px"></center>
<table>
  <tr>
     <td>
	   <label for="emailsignup" class="youmail" data-icon="e" ><font face="" size="5" color="white">Regd no</font></label>
	 </td>
	 <td>
	     <input id="regdno" name="regno" required type="text" placeholder="regdno"/>
     </td>
   </tr>	 

<tr>
    <td valign="top">
       <label for="comments"><font face="" size="5" color="white">Comment </br></font></label></br>
    </td>
    <td valign="top">
       <textarea  name="comments" maxlength="1020" cols="35" rows="6"></textarea>
     </td>
</tr>
<tr>
<td>
</td>
<td>
 <p class="signin button"> 
					<input type="submit" name="submit" value="Send"/> 
</p>
</td>
  </center>
  </table>
<a href="logout.php">logout</a>
</form>


</body>
</html>

