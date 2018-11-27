<?php 
	session_start();
	unset($_SESSION['username']);
	if(session_destroy()) // Destroying All Sessions
	{
	header("location:../login.php"); // Redirecting To Home Page
	}
?>
 
