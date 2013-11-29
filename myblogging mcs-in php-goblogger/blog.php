<?php session_start();?>
<html>
<head>
</head>
<body  style="background-color:#6B6D82;" align="center">
<?php 
	
		$host="localhost"; // Host name
		$username="root"; // Mysql username
		$password="abc123"; // Mysql password
		$db_name="db_db6"; // Database name
		$tbl_name="blog"; // Table name
		
		mysql_connect("$host", "$username", "$password")or die("cannot connect");
		mysql_select_db("$db_name")or die("cannot select DB");
		
		
		$t=$_GET['key'];
		$sql="SELECT * FROM blog where title='$t'";
		$r=mysql_query($sql);
		$result=mysql_fetch_assoc($r);
		$bdy=$result['body'];
		echo "<table border=\"1\" align=\"center\">";
		echo "<tr>";
		echo "<th>The Title</th>";
		echo "<th width=\"800\">Body</th>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>$t</td>";
		echo "<td>$bdy</td>";
		echo "</tr>";
		

				

?>
<form method="GET">
</form>
<h2><a href="blogs.php">Back to My Blogs</a></h2>
</body>
</html>
