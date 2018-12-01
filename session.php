<?php

include 'main/db.php';

session_start();

$user_check=$_SESSION['login_user_admin'];

$query =  "select * from tbl_admin where username='$user_check'";
$sql = mysqli_query($mysql, $query);

while ($hasil = mysqli_fetch_array ($sql)) 
{

	$login_session = stripslashes ($hasil['username']);
	$username = stripslashes ($hasil['username']);
	$id = stripslashes ($hasil['id']);
}

if(!isset($login_session))
	
{
	mysqli_close($mysql); 
	header('Location: login.php');
}

?>