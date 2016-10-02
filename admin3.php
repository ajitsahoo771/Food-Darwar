
<?php
session_start();
if(!isset($_SESSION['email']))
{
	header("location:adminlogin.php");
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

    <title>admin menu</title>

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
	  <hr><img src="dadsaasd.jpg" class="img-responsive" alt="sipu" width="200" height="300"><hr>
	    <a href="admprofile1.php"><font face="tekton pro" size="6" color="black">Profile</font></a></br>
		<a href="admin3.php"><font face="tekton pro" size="6" color="black">Menu</font></a></br>
		<a href="adminfee1.php"><font face="tekton pro" size="6" color="black">fees</font></a></br>
        <a href="admincomp.php"><font face="tekton pro" size="6" color="black">Complain</font><hr></a></br>
		<div class="btn-group btn-group-justified">
                     <a href="logout2.php" class="btn btn-primary">logout</a>
		</div>
		</br></br></br></br></br></br></br></br></br></br></br></br></br></br></center> </div>
    <div class="col-sm-8" style="background-color:white;"><center><font face="tekton pro" size="9" color="black"><u>Menu</u></font></br>
	<form name="form1" id="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		   <table class="table" cellpadding="10" id="tblData">
          
                <tbody> 
				 <tr id="border">
						<td align="center" valign="middle"><u><b>Day</b></u></td>
						<td align="center" valign="middle"><u><b>Lunch</b></u></td>
						<td align="center" valign="middle"><u><b>Dinner</b></u></td>	
                    </tr>
                
               
                    <tr>	
						<td align="center" valign="middle">Monday</td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item1"></td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item2"></td>
					</tr>		
                   
                     <tr>	
						<td align="center" valign="middle">Tuesday</td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item3"></td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item4"></td>
					</tr>		 
                   
                     <tr>	
						<td align="center" valign="middle">wednesday</td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item5"></td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item6"></td>
					</tr>	
                    <tr>	
						<td align="center" valign="middle">thurseday</td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item7"></td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item8"></td>
					</tr>	
                    <tr>	
						<td align="center" valign="middle">friday</td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item9"></td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item10"></td>
					</tr>	
                    <tr>	
						<td align="center" valign="middle">saturday</td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item11"></td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item12"></td>
					</tr>	
                    <tr>	
						<td align="center" valign="middle">sunday</td>
    					<td align="center" valign="middle"><input  class="input-lg" type="text" name="item13"></td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item14"></td>
					</tr>
                    <tr>
                    <td></td>
                    <td><div class="col-lg-15">
						      <button type="submit" name="submit" class="btn btn-success">edit</button>
						    </div>
                    </td>
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

<?php


$con=mysql_connect("localhost","root","");
mysql_select_db("regestration",$con);
error_reporting(0);
$a=$_POST['item1'];
$b=$_POST['item2'];
$c=$_POST['item3'];
$d=$_POST['item4'];
$e=$_POST['item5'];
$f=$_POST['item6'];
$g=$_POST['item7'];
$h=$_POST['item8'];
$i=$_POST['item9'];
$j=$_POST['item10'];
$k=$_POST['item11'];
$l=$_POST['item12'];
$m=$_POST['item13'];
$n=$_POST['item14'];
/*$h=mysql_query("SELECT * FROM lunch");
$h1=mysql_query("SELECT * FROM dinner");
$fetch=mysql_fetch_array($h);
$fetch=mysql_fetch_array($h1);
$tem1=$fetch['item1'];
 $tem2=$fetch['item2'];*/

if(isset($_POST['submit']))
{
			
$in=mysql_query("update lunch set monday='$a',tuesday='$c',wednesday='$e',thurseday='$g',friday='$i',saturday='$k',sunday='$m'");
    
$in1=mysql_query("update dinner set monday='$b',tuesday='$d',wednesday='$f',thurseday='$h',friday='$j',saturday='$l',sunday='$n'");
	echo "insert successful";
	
}

?>

