<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
echo "error in coonection";	
}
mysql_select_db("regestration");

$row=mysql_fetch_array(mysql_query("SELECT * FROM fees where id=10000"));

//$sql = "SELECT table1.user, id FROM table1, table2 WHERE    table1.id=table2.id";

$tem1= $row['btech'];
$tem2= $row["barch"];
$tem3= $row["mtech"];
$tem4= $row["mba"];
$tem5= $row["bba"];
$tem6= $row["bcom"];
$tem7= $row["diploma"];
?>



<html>
<head>

<style>
table {
    width:5000%;
	
}
table, th, td {
    border: 3px solid white;
    border-collapse: ;
}
th, td {
	padding: 1px;
}
table#t01 tr:nth-child(even) {
    background-color: yellow;
}
table#t01 tr:nth-child(odd) {
   background-color:yellow;
}
table#t01 th	{
	background-color: blue;
	color: white;
}
</style>

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
<title>fees</title>
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
      <li><a style="text-decoration:none" href="canteen1.php"><font color="white">Mess-1</font></a></li>
      <li><a style="text-decoration:none" href="canteen2.php"><font color="white">Mess-2</font></a></li>
      <li><a style="text-decoration:none" href="canteen3.php"><font color="white">Mess-3</font></a></li>
    </ul>
  </li>
  <li><a style="text-decoration:none" href="fee.php"><font color="white">Fee</font></a></li>
  <li><a style="text-decoration:none" href="rule.php"><font color="white">Rules</font></a></li>
  <li><a style="text-decoration:none" href="gallery.php"><font color="white">Gallery</font></a></li>
  <li><a style="text-decoration:none" href="contact.php"><font color="white">Contact</font></a></li>
  <li><a style="text-decoration:none" href="login.php"><font color="white">Feedback</font></a></li>
</ul>
	 
 
 <div style="margin-center:440px; >

<style> 

<center>
ul {
    float: CENTER;
    width: 500%;
    padding: 5;
    margin: 5;
    list-style-type: none;
}

 

li {
    display: outline;
}

</center>
</style>
<b>

<font size="4" color="white">
<center>

<table id="t01" border="10" color="white"  style="width:800px" align="center">

  <tr>
    <th><center><font size="6" color="white">Course</font></center></th>
    <th><center><font size="6" color="white">Mess Fee</font></center></th>
  </tr>
  <tr>
    <td><center><font size="5" color="blue">B.Tech (4 years)</font></td>
   <td><input  type="text" name="item7" value="<?php echo $tem1; ?>" readonly/></td>
  </tr>
  <tr class="alt">
    <td><center><font size="5" color="blue">B. Arch (5 years)</font></td>
    <td><input  type="text" name="item7" value="<?php echo $tem2; ?>" readonly/></td>
  </tr>
  <tr>
    <td><center><font size="5" color="blue">M. Tech (2 years)</font></td>
    <td><input  type="text" name="item7" value="<?php echo $tem3; ?>" readonly/></td>
  </tr>
  <tr class="alt">
    <td><center><font size="5" color="blue">MBA (2 years)</font></td>
   <td><input  type="text" name="item7" value="<?php echo $tem4; ?>" readonly/></td>
  </tr>
  <tr>
    <td><center><font size="5" color="blue">BBA (3 years)</font></td>
    <td><input  type="text" name="item7" value="<?php echo $tem5; ?>" readonly/></td>
  </tr>
  <tr class="alt">
    <td><center><font size="5" color="blue">B.Sc. / B.Com. (3 years)</font></td>
    <td><input  type="text" name="item7" value="<?php echo $tem6; ?>" readonly/></td>
  </tr>
  <tr>
    <td><center><font size="5" color="blue">Diploma</font></td>
    <td><input  type="text" name="item7" value="<?php echo $tem7; ?>" readonly/></td>
  </tr>

  </tr>
</table>

</body></html>





