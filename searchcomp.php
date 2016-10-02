

<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
echo "error in connection";	
}
mysql_select_db("regestration");
error_reporting(0);
$a=$_POST['regno'];
if(isset($_POST['submit']))
{

$any=mysql_fetch_array(mysql_query("SELECT * FROM complain where regdno='$a'"));

//$sql = "SELECT table1.user, id FROM table1, table2 WHERE    table1.id=table2.id";

$tem1= $any['regdno'];
$tem2= $any["comment"];
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SHIELD - Free Bootstrap 3 Theme">
    <meta name="author" content="Carlos Alvarez - Alvarez.is - blacktie.co">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>admin</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link href="assets/css/animate-custom.css" rel="stylesheet">


    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
  
  	<div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
       <center>
      <font face="tekton pro" color="white" size="10">Centurion Food Darbar </font>
	  </center>
    </div>
    </div>
</br></br></br>
  <div id="section1" class="container-fluid">

  <div class="row">
    <div class="col-sm-4" style="background-color:gray;"><center><font face="tekton pro" size="9" color="black"><u>Admin</u></font>
	  <hr><img src="dadsaasd.jpg" class="img-responsive" alt="sipu" width="200" height="300"><hr><a href="admin2.php"><font face="tekton pro" size="6" color="black">Profile</font></a></br>
        <a href="admin3.php"><font face="tekton pro" size="6" color="black">Menu</font><hr></a></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></center> </div>
    <div class="col-sm-8" style="background-color:white;"><center><font face="tekton pro" size="9" color="black"><u>Profile</u></font><hr></br>
	<form name="form1" id="form1" method="post" action="checkcomp.php">
		   <table class="table" cellpadding="10" id="tblData">
          
                <tbody> 
				 <tr id="border">
					    <td align="center" valign="middle"><u><b>regd no</b></u></td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="regno"></td>
						<td><input type="submit" name="search" value="search"></td>
                    </tr>		   
                </tbody>
               
            </table>
            
	</form></center></div>
  </div>
  
</div>
  




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
		

	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/retina.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
	<script type="text/javascript" src="assets/js/jquery-func.js"></script>
  </body>
</html>
