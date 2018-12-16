<?php

include '../main/db.php';

if (isset($_GET['no'])) 
{
$no = $_GET['no'];
} 

else 

{
 	echo "<script language='javascript'>alert('Tidak dapat ID'); document.location='dashboard.php'</script>";
}

?>

<?php

if (!empty($no)) 

{

$query = "DELETE FROM tbl_pengurus WHERE no='$no'";

$sql = mysqli_query ($mysql, $query);

	if ($sql) 

	{
	 	echo "<script language='javascript'>alert('Pengurus berhasil dihapus'); document.location='../kepengurusan.php'</script>";
	} 

	else
	{
		echo "<script language='javascript'>alert('Gagal hapus pengurus'); document.location='../kepengurusan.php'</script>";

	}

} 

else 
{
	die ("ID kegiatan tidak diketahui");
}

?>