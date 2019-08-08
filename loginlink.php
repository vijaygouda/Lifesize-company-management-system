<?php
require 'vendor/autoload.php';
	/*To insert a document in a collection*/
	$mclient = new MongoDB\Client;
	$msdb = $mclient->company;
	$mobcollection = $msdb->login;
	$countinit=$mobcollection->count();
$username="Dr.Thippeswamy";
$password="1234567";

$user1=$_GET['uname'];
$pass1=$_GET['psw'];


//echo $user1;
//echo $pass1;
if(((strcmp($username,$user1))==0) && ((strcmp($password,$pass1))==0))
{
	echo "login successful";
	header("Location:http://localhost/phpmongodb/index.php");
}
else
	echo "unsuccessful";  
	


?>
