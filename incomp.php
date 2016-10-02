<?php


$con=mysql_connect("localhost","root","");
mysql_select_db("regestration",$con);
$a=$_POST['regno'];
$b=$_POST['comments'];
if(isset($_POST['submit']))
	{
			$in=mysql_query("insert into complain (regdno,comment)values('$a','$b')");
			echo "prinnt insert successfull";
			header("location:ban1.php");
	}

?>