<?php

$host="localhost";
$user="root";
$password="";
$db="gamingwebsite";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$email=$_POST["email"];
	$password=$_POST["password"];

	if($email=="admin@gmail.com" && $password=="adminpassword" )
	{

		$_SESSION["email"]=$email;
		
		header("location:admindashbord.php");
	}else
	{
		echo "email or password incorrect";
	}

}




?>