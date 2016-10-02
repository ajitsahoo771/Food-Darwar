
<?php


$con=mysql_connect("localhost","root","");
mysql_select_db("regestration",$con);
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['contact'];
$d=$_POST['password'];
$e=$_POST['photo'];

if(isset($_POST['submit']))
		{		
			$in=mysql_query("update admin3 set name='$a',email='$b',contact='$c',password='$d',photo='$e'");
    
			echo "prinnt insert successfull";
			header("location:admprofile1.php");
	
		}

?>