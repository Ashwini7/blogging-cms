<?php 
	session_start();
	$con=mysql_connect("localhost","root","abc123");
	$db="db_db6";
	$host="localhost";
	$username="root";
	$password="abc123";
		
		if(isset($_SESSION['username']))
	{
		$title=$_POST["title"];
		$title=mysql_real_escape_string($title);
		$body=$_POST["body"];
		$body=strip_tags($body);
		$body=mysql_real_escape_string($body);
		$comment=$_POST["comment"];
		$comment=mysql_real_escape_string($body);
	}
//else
/*echo "<script type='text/javascript'>";
echo "alert('Please Login');
</script>";
header("location:*/
		
		if (!$con)
		die('Could not connect:'.mysql_error());
		mysql_select_db($db,$con);
//$sql=mysql_query("Select * from mera_dusra_db");
// here your blog table get created where your title and body of blog get stored 

		if(!mysql_query("select * from blog"))
	{
//$create=mysql_query("CREATE TABLE blog(blog_title varchar(25) NOT NULL,blog_body varchar(255) NOT NULL");
		$test="CREATE TABLE blog(title varchar(25),body varchar(255),comment varchar (100),time datetime)";
		$create=mysql_query($test);
/*or die(mysql_error());*/
		echo "Table created";
		$insert=mysql_query("Insert INTO blog (title,body,comment,time) values('".$title."','".$body."','".$comment."','".date("d/m/y : H:i:s",time())."')");
		header("location:display.php");
	}
?>

