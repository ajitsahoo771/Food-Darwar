<?php
session_start();
if(!isset($_SESSION['email']))
{
	header("location:adminlogin.php");
}

?>


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


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SHIELD - Free Bootstrap 3 Theme">
    <meta name="author" content="Carlos Alvarez - Alvarez.is - blacktie.co">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>fees</title>

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
		<a href="adminfee.php"><font face="tekton pro" size="6" color="black">fees</font></a></br>
        <a href="admincomp.php"><font face="tekton pro" size="6" color="black">Complain</font><hr></a></br>
		<div class="btn-group btn-group-justified">
                     <a href="logout2.php" class="btn btn-primary">logout</a>
		</div>
		</br></br></br></br></br></br></br></br></br></br></br></br></br></br></center> </div>
    <div class="col-sm-8" style="background-color:white;"><center><font face="tekton pro" size="9" color="black"><u>Fees</u></font><hr></br>
	<form name="form1" id="form1" method="post" action="adminfee.php">
		   <table class="table" cellpadding="10" id="tblData">
          
                <tbody> 
				 <tr id="border">
						<td align="center" valign="middle"><u><b>Course</b></u></td>
						<td align="center" valign="middle"><u><b>fee</b></u></td>	
                    </tr>
                
               
                    <tr>	
						<td align="center" valign="middle">B-Tech</td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item1"  value="<?php echo $tem1; ?>" readonly/></td>
					</tr>		
                   
                     <tr>	
						<td align="center" valign="middle">B-Arch</td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item2"  value="<?php echo $tem2; ?>" readonly/></td>
					</tr>		 
                   
                     <tr>	
						<td align="center" valign="middle">M-Tech</td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item3"  value="<?php echo $tem3; ?>" readonly/></td>
					</tr>	
                    <tr>	
						<td align="center" valign="middle">MBA</td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item4"  value="<?php echo $tem4; ?>" readonly/></td>
					</tr>	
                    <tr>	
						<td align="center" valign="middle">BBA</td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item5"  value="<?php echo $tem5; ?>" readonly/></td>
					</tr>	
                    <tr>	
						<td align="center" valign="middle">B.SC./B.COM</td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item6"  value="<?php echo $tem6; ?>" readonly/></td>
					</tr>	
                    <tr>	
    					<td align="center" valign="middle">Diploma</td>
						<td align="center" valign="middle"><input class="input-lg" type="text" name="item7"  value="<?php echo $tem7; ?>" readonly/></td>
					</tr>
					<tr>
                    <td></td>
                    <td><div class="col-lg-15">
						      <button type="submit" name="submit" class="btn btn-success">Edit</button>
				     </div><td>
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