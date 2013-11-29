	<?php session_start();?>

<html>
<head>
	<body style="background-color:#6B6D82;" align="center">
	<center><h1 align="center">All My Blogs</h1></center>
		<h1><a href="display.php">See All blogs ! </a></h1>
		<h1 align="right">&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;
Welcome <?php echo "$_SESSION[user]";?>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="usersite.php">Logout</a></h1>

<?php

		
		$host="localhost"; // Host name
		$username="root"; // Mysql username
		$password="abc123"; // Mysql password
		$db_name="db_db6"; // Database name
		$tbl_name="blog"; // Table name


		mysql_connect("$host", "$username", "$password")or die("cannot connect");
		mysql_select_db("$db_name")or die("cannot select DB");



		$sql="SELECT * FROM blog";
		$r=mysql_query($sql);
			echo '<br><br>';
			echo "<form method=\"post\">";
			echo "<table witdh=\"1000\"border=\"1\" align=\"center\">";
			$row = mysql_fetch_assoc($r);
				echo "<tr>";
				echo "<th align=\"center\">Blog Title:</th>";
				echo "</tr>";
		

			 while ($row = mysql_fetch_assoc($r) ) 
	                 {
				$tltl=$row['title'];
				echo "<tr>";
				echo "<td><a href=\"blog.php?key=$tltl\">$tltl</a></td>";
				echo "</tr>";

			}
			echo "</table>";
			echo "</form>";

		
		
?>
</body>
</html>

