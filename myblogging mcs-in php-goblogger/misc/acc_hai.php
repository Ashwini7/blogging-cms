<?php
	$Date=date("Y-m-d");
	echo "<title>Welcome To Blogging World </title>
		  <h1 align=center>Welcome To blogging World</h1><hr/>
		  <h4 align=right>Date :$Date</h4>";
?>
<html>
	<h3>Go Bloggers !</h3>
	<table>
		<form method="POST" action="usersite.php">
		<tr>
			<td>Username :</td>
			<td><input name="UserName" required></td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input type="Password" name="Password" required></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="Submit" value="Login" required></td>
		</tr>
		</form>
	</table>
	<br>
</html>
<?php
	//Validating Username & Password
	session_start();
	$userName="Ashwini";
	$password="sicsr";
	$userPassword=$userName.$password;
	@$POSTCheck=$_POST['UserName'].$_POST['Password'];
	if($Userpassword==$POSTCheck)
	{
		$_SESSION['unames'] = $POSTCheck;
		header('Location: index.html');
	}
	else if($POSTCheck!=null)
	echo "<h3>UserName & Password Do Not Match</h3>";
	include('Footer.html');// or die("Error Displaying Footer");
?>
