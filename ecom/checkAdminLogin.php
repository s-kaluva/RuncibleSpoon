<?php 
session_start();
include 'connection.php';
if (isset($_POST['user_name']) && isset($_POST['user_password']))
{
	$username = $_POST['user_name'];
	$password = $_POST['user_password'];	
   
	if ($username=='admin' and $password=='admin') {
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $id;
	}
	else
	{
		echo "Error in login";
		echo '<br><a href="adminLogin.php">Go Back To Login</a>';
	}
}
if (isset($_SESSION['username']))
{
		$_SESSION['id'] = $id;
		#include 'data.php';
		header('Location:adminHome.php');
}	
?>
	