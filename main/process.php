<?php

session_start();

include 'db.php';

if (isset($_POST['submit'])) 

{
 

	if (empty($_POST['username']) || empty($_POST['password'])) 

	{
	
		echo "<script language='javascript'>alert('username atau password tidak boleh kosong'); document.location='../login.php'</script>";
	
	}


	else
	{

		$username=$_POST['username'];
		$password=$_POST['password'];

		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($mysql,$username);
		$password = mysqli_real_escape_string($mysql,$password);



		$query = mysqli_query($mysql, "SELECT *from tbl_admin where username='$username' AND password='$password'");

		$rows = mysqli_num_rows($query);

		 if ($rows== 1) 
		 
		 {
			setcookie("username", $username, time()+3600);
			$_SESSION['login_user_admin']=$username;
			header("location: ../index.php");
		 }	 

		 else
		 {
			echo "<script language='javascript'>alert('username atau password salah'); document.location='../login.php'</script>";
		 }


	}

//mysql_close($mysql); 

}
?>