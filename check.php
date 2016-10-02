<?php

$con=mysql_connect("localhost","root","");
mysql_select_db("irs",$con);

if(isset($_POST['submit']))
	{
		$a=$_POST['userid'];
		
		$login=mysql_query("select * from userstore where RegdMail='$a'");
		$row=mysql_fetch_array($login);
		     
			if(mysql_num_rows($login) !=0)

			{
				session_start();
				$_SESSION['Name']=$_POST['userid'];
				
header("Location:", true, 301);
exit();

	//echo '<script>window.location="complain.php";</script>';
			}

			else
			{
				header("location:RegValid.php");
			}
	}

?>
