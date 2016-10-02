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
<!DOCTYPE html>
<html> 
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>user</title>
<meta name="description" content="">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
#inner-page {
margin:0px;
}
#detail {
margin-left:300px;
margin-right:200px;
}
.footer {
  position: inherit;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 50px;
  background-color: #222;
  text-align:center;
}
.footer > .container {
  padding-right: 15px;
  padding-left: 15px;
}
#border
{
    background-color: #80B2FF;
	
}
.input-lg
{
	height:auto;
	width:50%;
}
.navbar-default{
  text-align:center;
}
body{
font-family:Monotype Corsiva;
}
</style>
</head>
<body>
<header id="header">
  <nav class="navbar navbar-inverse" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <div id="topbar">
     
<h2 id="sitename" align="center"><font color="white">Admin</font></h2>
	
	  </div>
	</div>
  </nav>
</header>
  <div><h2 align="center"><font face="Monotype Corsiva" color="3300CC"><b>Menu</b></font></h2></div>
		   <form name="form1" id="form1" method="post" action="">
		   <table class="table" cellpadding="10" id="tblData">
          
                <tbody> 
				 <tr id="border">
						<td align="center" valign="middle"><u><b>Day</b></u></td>
						<td align="center" valign="middle"><u><b>Lunch</b></u></td>
						<td align="center" valign="middle"><u><b>Dinner</b></u></td>	
                    </tr>
                
               
                    <tr>	
						<td align="center" valign="middle">Monday</td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item1" value="<?php echo $tem1; ?>" readonly/></td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item2" value="<?php echo $tem2; ?>" readonly/></td>
					</tr>		
                   
                     <tr>	
						<td align="center" valign="middle">Tuesday</td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item3" value="<?php echo $tem3; ?>" readonly/></td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item4" value="<?php echo $tem4; ?>" readonly/></td>
					</tr>		 
                   
                     <tr>	
						<td align="center" valign="middle">wednesday</td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item5" value="<?php echo $tem5; ?>" readonly/></td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item6" value="<?php echo $tem6; ?>" readonly/></td>
					</tr>	
                    <tr>	
						<td align="center" valign="middle">thurseday</td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item7" value="<?php echo $tem7; ?>" readonly/></td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item8" value="<?php echo $tem8; ?>" readonly/></td>
					</tr>	
                    <tr>	
						<td align="center" valign="middle">friday</td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item9" value="<?php echo $tem9; ?>" readonly/></td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item10" value="<?php echo $tem10; ?>" readonly/></td>
					</tr>	
                    <tr>	
						<td align="center" valign="middle">saturday</td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item11"  value="<?php echo $tem11; ?>" readonly/></td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item12"  value="<?php echo $tem12; ?>" readonly/></td>
					</tr>	
                    <tr>	
						<td align="center" valign="middle">sunday</td>
    					<td align="center" valign="middle"><input  class="input-lg" type="text" name="item13" value="<?php echo $tem13; ?>" readonly/></td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item14" value="<?php echo $tem14; ?>" readonly/></td>
					</tr>
                    		   
                </tbody>
               
            </table>
            <hr>
	</form>
	</div>
<footer class="footer">
      <div class="container">
        <p><font color="white"><center>Copyright &copy; 2015 A Different View</center></font></p>
      </div>
    </footer>
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
</body>
</html>	


