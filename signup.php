<html>
<head>
</head>

<?php 
	if(isset($_POST['submit']))
	{
		// here your image upload and path get store
		if($_FILES["file"]["error"] > 0)
		{
		    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		}
		else
		{
		    if(file_exists("images/" . $_FILES["file"]["name"]))
		    {
		    	  echo $_FILES["file"]["name"] . " already exists. ";
		    }
		    else
		    {
  	  		move_uploaded_file($_FILES["file"]["tmp_name"],
		    	  "images/" . $_FILES["file"]["name"]);

			  //Change File Permission so accesible to all places..

			 `chmod -R 777 images/*`; 
			$path="images/" . $_FILES["file"]["name"];
		    }
		}
		$host="localhost"; // Host name
		$username="root"; // Mysql username
		$password="abc123"; // Mysql password
		$db_name="db_db6"; // Database name
		$tbl_name="user"; // Table name
		
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
 				$id = $row['user_id'];
	                 }
			$usrid=$id+1;
			

		}
		
		$year=$_POST['year'];
		$month=$_POST['month'];
		$day=$_POST['day'];
		$dte=$year."-".$month."-".$day;
		$utype=1;
		$adrs=$_POST['address'];
		$user=$_POST['uname'];
		$passs=$_POST['upass'];
		$fnme=$_POST['fname'];
		$lnme=$_POST['lname'];
		$mle=$_POST['male'];
		$ads=$_POST['address'];
		$emil=$_POST['email'];
		$interest=$_POST['interest'];
$sql="INSERT INTO  `db_db6`.`user` (`userID` ,`username` ,`password` ,`flag`,`fname` ,`lname` ,`gender` ,`bdate` ,`address` ,`email` ,`interest`,`image_path`) VALUES ('$usrid','$user','$passs','$utype','$fnme','$lnme','$mle','$dte','$ads','$emil','$interest','$path')";
		if(!mysql_query($sql))
		{
			echo mysql_error();
		}
		else
		{
			header("location:userlogin.php");
		}
		
	}
?>








<body style="background-color:#6B6D82;">

<a href="index.php">Go To Main Page</a>

 <!-- Login COde -->
	<center><h2> Signup For New Account</h2></center>
	<table width="700" border="1" align="center">
	<tr>
		<td>First Name:
			<form method="post" enctype="multipart/form-data">
		             <input name="fname" type="text" size="20" />
		                                     
		</td>
 	</tr>
	<tr>
		<td>Last Name:<br>
        		   <input name="lname" type="text" size="20" />
		</td>
 	</tr>
	<tr>
		<td>Gender:<br>
			  <input type="radio" name="male" value="Male">Male <br />
			  <input type="radio" name="male" value="Female">Female <br />
	</td>
       	                              </tr>
					     <tr>
							<td>Birth Date:<br>
							Month:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Day&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year
							<br>
							<select name="month">
							  <option value="Jan">Jan</option>
  							  <option value="">Feb</option>
							  <option>March</option>
							  <option>April</option>
							  <option>May</option>
							  <option>June</option>
							  <option>July</option>
							  <option>Aug</option>
							  <option>Sep</option>
							  <option>Oct</option>
							  <option>N</option>
							  <option>Dec</option>
							</select> 
							<select name="day">
							  <option>1</option>
  							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
  							  <option>6</option>
							  <option>7</option>
							  <option>8</option>
							  <option>9</option>
  							  <option>10</option>
							  <option>11</option>
							  <option>12</option>
							 <option>13</option>
  							  <option>14</option>
							  <option>15</option>
							  <option>16</option>
							<option>17</option>
  							  <option>18</option>
							  <option>19</option>
							  <option>20</option>
							<option>21</option>
  							  <option>22</option>
							  <option>23</option>
							  <option>24</option>
							<option>25</option>
  							  <option>26</option>
							  <option>27</option>
							  <option>28</option>
							<option>29</option>
  							  <option>30</option>
							  <option>31</option>
							</select> 
			                                <select name="year">
							  <option>1980</option>
  							  <option>1981</option>
							  <option>1982</option>
							  <option>1983</option>
							  <option>1984</option>
							  <option>1985</option>
							  <option>1986</option>
							  <option>1987</option>
							  <option>1988</option>
							  <option>1989</option>
							  <option>1990</option>
							  <option>1991</option>
							  <option>1992</option>
							  <option>1993</option>
							  <option>1994</option>
							  <option>1995</option>
							  <option>1996</option>
							  <option>1997</option>
							  <option>1998</option>
							  <option>1999</option>
							  <option>2000</option>

							</select> 
							
			                                      </p>
 	 	                                        
							</td>
 	       	                              </tr>
						<tr>
					 		<td>Address:<br>

								<textarea rows="2" cols="40" name="address"></textarea>



							</td>
 	       	                               </tr>
						<tr>
					 		<td>Email Address:<br>
		                                                  <input name="email" type="text" size="20" />
                                              		


 	 	                                         
							</td>
 	       	                               </tr>
						<tr>
					 		<td>Your Interest<br>
							<select name="interest">
							  <option>Music</option>
  							  <option>Sports</option>
							  <option>Education</option>
							  <option>Technology</option>
							  <option>Science</option>
							  <<option>Singing</option>
							  <option>Dacing</option>
							  </select> 
							
							</td>
 	       	                               </tr>

						<tr>
					 		<td>User Name<br>
		                                                  <input name="uname" type="text" size="20" />

							</td>
 	       	                               </tr>
						<tr>
					 		<td>Password:<br>
		                                                  <input name="upass" type="password" size="20" />
                                              		</p>



							</td>
 	       	                               </tr>
						<tr>
					 		<td>Confirm Password:<br>
		                                                  <input name="cnfupass" type="password" size="20" />
                                              		</p>



							</td>
 	       	                               </tr>
					       
					       <tr>
							<td colspan="2" bgcolor="#F5F5F5">Upload Image<br><br>
							<input type="file" name="file" id="file" />
							<br />
						</tr>
						
						

                                          <tr>
                                            <td align="center" valign="middle">
							
                                               		   <center><input type="submit" name="submit" value="Sign Up with Go Blogger"/></center>
	                                                
        	                                        </div>
					    </td>
                                          </tr>
                                          
						</form>	
                                          </table>


</body>
