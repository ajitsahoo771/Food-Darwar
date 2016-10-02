<?php
session_start();
if(!isset($_SESSION['email']))
{
	header("location:login.php");
}
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
<title>cutm canteen</title>
</head>
<body bgcolor="#66CCFF">
<!--<script type="text/javascript">
document.write ('<p> <span id="date-time">', new Date().toLocaleString(), '<\/span>.<\/p>')
if (document.getElementById) onload = function () {
	setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 100)
}

</script>-->
<div class="div">
          <p style="font-size:38px;color:#00FF33;font-weight:bold;margin-left:150px">
  <img src="uv25757.png" style="width:120px;height:120px;margin-bottom: -60;"> 
 

   welcome To Centurion Food Darbar
</p>

<form method="get" action="http://www.google.com/search">
<P ALIGN="RIGHT"><input type="text"   name="q" size="31" maxlength="255" value="" / >
<input type="submit" value="Google Search" />

</P>
</form>
<hr size="2" style="color:green"> 
</div> 
<ul><li><a style="text-decoration:none" href="HOME1.html">HOME</a></li>
  <li>
      MENU
    <ul>
      <li><a style="text-decoration:none" href="canteen1.html">CANTEEN-1</a></li>
      <li><a style="text-decoration:none" href="canteen2.html">CANTEEN-2</a></li>
      <li><a style="text-decoration:none" href="canteen3.html">CANTEEN-3</a></li>
    </ul>
  </li>
  <li><a style="text-decoration:none" href="fee.html">FEE</a></li>
  <li><a style="text-decoration:none" href="rule.html">RULES</a></li>
  <li><a style="text-decoration:none" href="gallery.html">GALLERY</a></li>
  <li><a style="text-decoration:none" href="contact1.html">CONTACT</a></li>
  <li><a style="text-decoration:none" href="C:\xampp\htdocs\PROJECT CASTOM\abc.html">FEEDBACK</a></li>
</ul>
	 



<form action="mail_content.php" >
<table>

<tr>
 <td valign="top">
  <label for="comments"><font face="" size="20" color="white">Type your suggestion </font></label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="100" rows="10"></textarea>
 </td>
  <tr>
 <td colspan="2" style="text-align:right">
  <input type="submit" name="submit" value="Submit">
 </td>
</tr>







<tr>
<td>
<h>choose a image</h>
</td>
<td>
<img src="http://myserver.com/myimage.jpg" style="border-left:1px solid #000000;padding-left:500px;margin-left:500px;">
</td>
</tr>

</form>


  <input type="file" name="pic" accept="image/*">
  <input type="submit">
  <a href="logout.php">logout</a>
</form>









<center>&copy;cutm</center>

  </body>
  </html>