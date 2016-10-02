<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
echo "error in coonection";	
}
mysql_select_db("regestration");
$any=mysql_fetch_array(mysql_query("SELECT * FROM lunch where mess=5"));
	
$row=mysql_fetch_array(mysql_query("SELECT * FROM dinner where mess=5"));

//$sql = "SELECT table1.user, id FROM table1, table2 WHERE    table1.id=table2.id";

$tem1= $row['monday'];
$tem2= $any["monday"];
$tem3= $row["tuesday"];
$tem4= $any["tuesday"];
$tem5= $row["wednesday"];
$tem6= $any["wednesday"];
$tem7= $row["thurseday"];
$tem8= $any["thurseday"];
$tem9= $row["friday"];
$tem10= $any["friday"];
$tem11= $row["saturday"];
$tem12= $any["saturday"];
$tem13= $row["sunday"];
$tem14= $any["sunday"];

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
<title>Menu1</title>
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
 <center>


<head>
<title>CANTIN-1</title>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 100%;
    border-collapse: collapse;
}

#customers td, #customers th {
    font-size: 1.20em;
    border: 3px solid #008F00;
    padding: 3px 7px 2px 7px;
}

#customers th {
    font-size: 1.1em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #FF0066;
    color: #ffffff;
}

#customers tr.alt td {
    color: #000000;
    background-color: #white;
}
</style>
</head>
<body bgcolor="#66CCFF">
<div style="margin-left:240px; margin-right:240px">
<center>
<img src="c1.png" style="width:700px;height:100px">
</center>
<form name="form1" id="form1" method="post" action="">
<table id="customers">
  <tr>
    <th><center>DAYS</center></th>
    <th><center>LUNCH</center></th>
    <th><center>DINNER</center></th>
  </tr>
  <tr>
    <td><center>MON DAY</td>
    <td><input  type="text" name="item7" value="<?php echo $tem2; ?>" readonly/></td>
    <td><input  type="text" name="item7" value="<?php echo $tem1; ?>" readonly/></td>
  </tr>
  <tr class="alt">
    <td><center>TUES DAY</td>
   <td><input  type="text" name="item7" value="<?php echo $tem4; ?>" readonly/></td>
    <td><input  type="text" name="item7" value="<?php echo $tem3; ?>" readonly/></td>
  </tr>
  <tr>
    <td><center>WEDNES DAY</td>
    <td><input  type="text" name="item7" value="<?php echo $tem6; ?>" readonly/></td>
    <td><input  type="text" name="item7" value="<?php echo $tem5; ?>" readonly/></td>
  </tr>
  <tr class="alt">
    <td><center>THURS DAY</td>
    <td><input  type="text" name="item7" value="<?php echo $tem8; ?>" readonly/></td>
    <td><input  type="text" name="item7" value="<?php echo $tem7; ?>" readonly/></td>
  </tr>
  <tr>
    <td><center>FRI DAY</td>
    <td><input  type="text" name="item7" value="<?php echo $tem10; ?>" readonly/></td>
    <td><input  type="text" name="item7" value="<?php echo $tem9; ?>" readonly/></td>
  </tr>
  <tr class="alt">
    <td><center>SATUR DAY</td>
    <td><input  type="text" name="item7" value="<?php echo $tem12; ?>" readonly/></td>
    <td><input  type="text" name="item7" value="<?php echo $tem11; ?>" readonly/></td>
  </tr>
  <tr>
    <td><center>SUN DAY</td>
    <td><input  type="text" name="item7" value="<?php echo $tem14; ?>" readonly/></td>
    <td><input  type="text" name="item7" value="<?php echo $tem13; ?>" readonly/></td>
  </tr>

  </tr>
</table>
</div>
</form>	  
</body>
</html>
