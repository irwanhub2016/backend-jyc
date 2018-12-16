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

$query = "DELETE FROM tbl_galeri WHERE no='$no'";

$sql = mysqli_query ($mysql, $query);

	if ($sql) 

	{

	$query = mysqli_query($mysql, "SELECT *from tbl_galeri");
	 
	// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($query);
	 
	if($cek == 0)
		
		{

			$reset_tbl_galeri = mysqli_query($mysql, "ALTER TABLE tbl_galeri AUTO_INCREMENT = 1");

			echo "<script language='javascript'>alert('Kegiatan berhasil dihapus'); document.location='../kegiatan.php'</script>";
			
		}

		else
		{
			echo "<script language='javascript'>alert('Kegiatan berhasil dihapus'); document.location='../kegiatan.php'</script>";
		}

	} 

	else
	{
		echo "<script language='javascript'>alert('Gagal hapus kegiatan'); document.location='../kegiatan.php'</script>";

	}

} 

else 
{
	die ("ID kegiatan tidak diketahui");
}

?>