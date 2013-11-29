<?php


		$host="localhost"; // Host name
		$username="root"; // Mysql username
		$password="abc123"; // Mysql password
		$db_name="db_db6"; // Database name
		$tbl_name="user"; // Table name
		
		// Connect to server and select databse.

		mysql_connect("$host", "$username", "$password")or die("cannot connect");
		mysql_select_db("$db_name")or die("cannot select DB");

		// username and password sent from form

		$myusername=$_POST['username'];
		$mypassword=$_POST['password'];
		$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
		$r=mysql_query($sql);
		if($r)
		{
		$count=mysql_num_rows($r);
		}
		$result=mysql_fetch_array($r);
		if($count==1 && $result['flag']==0)
		{
			session_start();

			$_SESSION['user']=$result['username'];
			$_POST['status']="";
			$u=$result['username'];
			echo $result['flag'];

		}
		
		else
		{
			
			$_POST['status']="Sorry Your Username or Password May be Wrong....!!!!!!1";
			$_SESSION['user']="";
		}


?>

<html>
<head>
</head>
	<body assign="center" style="background-color:#6B6D82;">
	<a href="usersite.php"><h3>view your Blogging site !!!</h3></a>
</body>
</html>
