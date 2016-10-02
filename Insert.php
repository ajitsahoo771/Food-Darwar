
<?php


$con=mysql_connect("localhost","root","");
mysql_select_db("regestration",$con);
$a=$_POST['username'];
$b=$_POST['regdno'];
$c=$_POST['email'];
$d=$_POST['password'];
$e=$_POST['confirm'];

if(isset($_POST['submit']))
	{
		if ($d == $e)
		{		
			$in=mysql_query("insert into regd (Name,Regdno,Email,Password,Confpassword)values('$a','$b','$c','$d','$e')");
			echo "prinnt insert successfull";
			header("location:ban.php");
	
		}
			echo "re enter pssword";
		}

?>