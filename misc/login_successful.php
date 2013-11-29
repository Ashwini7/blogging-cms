<?php 
session_start();
$_SESSION['Username']=$myusername;
$_SESSION['Password']=$mypassword;
//if(!session_is_registered(myusername)){
header("location:userpage.php");
//}
?>
