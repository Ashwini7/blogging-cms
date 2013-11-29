<?php
	session_start();
	@$_SESSION['username']=$_POST['username'];
?>
<?php

if(isset($_POST['submit']))
	{
		$host="localhost"; // Host name
		$username="root"; // Mysql username
		$password="abc123"; // Mysql password
		$db_name="db_db6"; // Database name
		$tbl_name="blog"; // Table name
		// User id Generator......
		mysql_connect("$host", "$username", "$password")or die("cannot connect");
		mysql_select_db("$db_name")or die("cannot select DB");
		// username and password sent from form
		$sql="SELECT * FROM $tbl_name";
		$r=mysql_query($sql);
		if($r)
		{
			$count=mysql_num_rows($r);
		}
		if($count==0)
		{
			$usrid=1001;
		}
		else
		{
			 while ($row = mysql_fetch_assoc($r)) 
	                 {
 				$id = $row['blog_id'];
	                 }
			$usrid=$id+1;
			

		}
		// Connect to server and select databse.
		$tle=$_POST['title'];
		$bdy=$_POST['body'];
		date_default_timezone_set('Asia/Calcutta');
		$dt=date("Y-m-d");
		$_SESSION['title']=$tle;
		$_SESSION['date']=$dt;
		$_SESSION['body']=$bdy;

		
$sql="INSERT INTO  `db_db6`.`blog` (`title` ,`body` ,`comment` ,`time` ,`blog_id` ) VALUES ('$tle','$bdy','$day','$dt','$usrid')";
		if(!mysql_query($sql))
		{
			echo mysql_error();
		}
		else
		{
		header("location:display.php");
		}
}
?>

<html>
<body align="center" style="background-color:#6B6D82;" >
	
	<form method="POST">
<table>
	<tr>
		<td border= 2 rowspan="100"> 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				         	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
	</tr>
	<tr>
		<td rowspan="100">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
	</tr>
	
	<tr>
		<td rowspan="100"> 		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
	</tr>
	<tr>
		</td rowspan="100">  		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
	</tr>
</table>

<table border="1" align="center" color="#c16f6f">
	<tr>
		<td colspan="2" align="center">
		<h2><font color='#d2a1a1'> <u>Blog</u	> </font></h2>
		</td>
	</tr>
	
		<td><font color='#d2a1a1'>
	Name</font>
		</td>
	
	
		<td> <input type="text" name="title">
		</td>

	<tr>
		<td><font color='#d2a1a1'>
	Body</font>
		</td>
		
		<td>
		<textarea cols="100" rows="20" name="body"></textarea>
		</td>
</tr>
<tr>		
		<td><font color='#d2a1a1'>
	Enter Your Comments:</font>
		</td>
<td>
		
			<textarea wrap="virtual" name="Comments" cols="100" rows="7" maxlength=100></textarea><br>

		</td>
</tr>
	<tr>
		<td colspan="2"> <input type="submit" name="submit" value="Publish!!!">
				<input type="Reset" value="Clear">

		</td>
	</tr>
</table>
</form>


</body>
</html>
