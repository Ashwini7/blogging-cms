<?php
//enter your my sql Admin username and password
$con = mysql_connect("localhost","root","abc123");
	if (!$con)
  {
  	die('Could not connect: ' . mysql_error());
  }
  	else {
  		echo "connected";
  	}

if (mysql_query("CREATE DATABASE go1_db",$con))
  {
  	echo "Database created";
 
  }
	else
  {
  	echo "Error creating database: " . mysql_error();
  }
// this will create your table in your database



// ---------------------------------------------------------
mysql_select_db("go1_db", $con);

 //Table structure for table `user`


$sql= "CREATE TABLE user (
  username varchar(25) NOT NULL,
  password varchar(255) NOT NULL
)";


 // Dumping data for table `user`


/*INSERT INTO `user` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');*/

//--------------------------------------------------------------------

$sql1= "CREATE TABLE user_blog (
  title varchar(25) NOT NULL,
  body varchar(255) NOT NULL,
  time datetime 
)";

// Execute query
		
		mysql_query($sql,$sql1,$con);

		mysql_close($con);
?>

<html>
	<body> 
		<a href="index.html">Go Blogger Home Page</a>";
	</body>
</html>



