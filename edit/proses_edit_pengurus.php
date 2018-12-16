<?php 
include "../session.php";

if(isset($_POST['submit']))

{
			//$id_pemesanan = $_POST['id_pemesanan'];
			$no = $_GET['no'];
			$nama = $_POST['nama'];
			$no_telp = $_POST['no_telp'];
			$divisi = $_POST['divisi'];
			$jabatan = $_POST['jabatan'];
			$status = $_POST['status'];			

			$query ="update tbl_pengurus set nama='$nama', no_telp='$no_telp', divisi='$divisi', jabatan='$jabatan', status='$status' where no='$no'";

			$update = mysqli_query($mysql, $query);

			if($update)
				{
					echo "<script language='javascript'>alert('Berhasil update data pengurus !'); document.location='../detail/detail_pengurus.php?no=$no'</script>";
					echo $no;
				}
			
			else
				{

					echo "<script language='javascript'>alert('Gagal update data pengurus !'); document.location='../detail/detail_pengurus.php?no=$no'</script>";
				}

}

?>
