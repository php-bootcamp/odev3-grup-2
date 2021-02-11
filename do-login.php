<?php 

#emre ensar çapcı - onur emre ergin- songül keskin
 
session_start();
 
if($_SESSION["username"] == "bootcamp" && $_SESSION["password"] == "bootcamp")	
{
 
// echo "Hoş Geldiniz Sayın ".$_SESSION["username"];
	header("location: posts.php");	
}
else
{

$message = "Your password or username is incorrect!.";
$_SESSION['message'] = $message;
$username=$_SESSION["username"];
$session="false";
header("location: login.php?user=$username&session=$session");	
 
}
?>