<?php
$auth=array();
require('lib.php');
loadfile();

$email=$_REQUEST["email"];
$password=md5($_REQUEST["password"]);
session_start();
$_SESSION["flag"]="";

if(array_key_exists($email,$auth))
{
	$pass=$auth[$email];
	if($pass==$password)
	{
		$_SESSION["flag"]="loginSuccess";
		header("Location:profile.php");
	}
	else
	{
	 header('Location:login.php?msg=Incorrect Password');
	}
}
else
	header('Location:login.php?msg=Invalid User');

?>