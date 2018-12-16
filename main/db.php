<?php


 /*$host="localhost";
 $user="root";
 $password="";
 $db ="jkt_choir"; 
 */

 $host="localhost";
 $user="jakartay_1234";
 $password="12345678";
 $db ="jakartay_test";

 $mysql = mysqli_connect($host,$user,$password,$db) or die ("<script language='javascript'>alert('Opps server bermasalah. Silahkan kontak ka riffal atau web developer temennya ka riffal'); document.location='../upload_foto.php'</script>");

 if(!$mysql)
 {
					echo "<script language='javascript'>alert('Opps server bermasalah. Silahkan kontak ka riffal atau web developer temennya ka riffal'); document.location='../upload_foto.php'</script>";
 }

?>
