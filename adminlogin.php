<?php
session_start();
if(isset($_SESSION['email']))
{
	header("location:admin.php");
}
else
{
?>



<html>
<head>
<link rel="stylesheet" href="sty.css">
        <style> 
.div {
    background: url("IMG_5845.jpg");
    background-size: 100% 100%;
    background-repeat: no-repeat;
}
center
ul {
    float: CENTER;
    width: 500%;
    padding: 0;
    margin: 2;
    list-style-type: none;
}

</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="Content-Script-Type" content="text/javascript">
<meta name="Content-Style-Type" content="text/css">
<title>adminlogin</title>
</head>
<body bgcolor="white">
<!--<script type="text/javascript">
document.write ('<p> <span id="date-time">', new Date().toLocaleString(), '<\/span>.<\/p>')
if (document.getElementById) onload = function () {
	setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 100)
}

</script>-->
<div class="div">
          <p style="font-size:38px;color:#00FF33;font-weight:bold;margin-left:150px">
  <img src="uv25757.png" style="width:120px;height:120px;margin-bottom: -60;"> 
 

    Welcome To Centurion Food Darbar 
</p>

<form method="get" action="http://www.google.com/search">
<P ALIGN="RIGHT"><input type="text"   name="q" size="31" maxlength="255" value="" / >
<input type="submit" value="Google Search" bacground="transparent" />

</P>
</form>
<hr size="2" style="color:green"> 
</div> 
<ul><li><a style="text-decoration:none" href="Home.php"><font color="white">Home</font></a></li>
  <li>
     <font color="white"> Menu</font>
    <ul>
      <li><a style="text-decoration:none" href="canteen1.html"><font color="white">Mess-1</font></a></li>
      <li><a style="text-decoration:none" href="canteen2.html"><font color="white">Mess-2</font></a></li>
      <li><a style="text-decoration:none" href="canteen3.html"><font color="white">Mess-3</font></a></li>
    </ul>
  </li>
  <li><a style="text-decoration:none" href="fee.php"><font color="white">Fee</font></a></li>
  <li><a style="text-decoration:none" href="rule.php"><font color="white">Rules</font></a></li>
  <li><a style="text-decoration:none" href="gallery.php"><font color="white">Gallery</font></a></li>
  <li><a style="text-decoration:none" href="contact.php"><font color="white">Contact</font></a></li>
  <li><a style="text-decoration:none" href="login.php"><font color="white">Feedback</font></a></li>
</ul>




<center>

<font face="" size="6" color="blue">
      Admin Login 
        </font>

<br>
<img src="Food_Barnstar_Hires.png" style="width:150px;height:150px">


    
    





 
 
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table>
  <tr>
			<th align="left">Email:</th>
			<td align="left"><input type="email" name="email"></td>
  </tr></BR>
  <tr>
			<th align="left">Password:</th>
			<td align="left"><input type="password" name="password"></td>
   </tr></BR>
		
   <tr>
			<td></td>
			<td></td>
			<td align="left"><input type="submit" name="submit"></td>
    </tr></BR>
</table>
</form>


</center>


 

       
</body>
</html>

<?php


$con=mysql_connect("localhost","root","");
mysql_select_db("regestration",$con);

if(isset($_POST['submit']))
{
$a=$_POST['email'];
$b=$_POST['password'];

$login=mysql_query("select * from admin3 where email='$a' and password='$b'");
$row=mysql_fetch_array($login);
if(mysql_num_rows($login) !=0)

{
	$_SESSION['email']=$_POST['email'];
	header("location:admin.php");
}

else
{
header("location:adminlogin.php");
echo "invalid login";	
}
}

}
?>
