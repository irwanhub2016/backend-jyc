<?php 
include "../session.php";

if(isset($_POST['submit']))

{
			//$id_pemesanan = $_POST['id_pemesanan'];
			$no = $_GET['no'];
			$nama_kegiatan = $_POST['nama_kegiatan'];
			$jenis_kegiatan = $_POST['jenis_kegiatan'];
			$deskripsi_kegiatan = $_POST['deskripsi_kegiatan'];
			$tanggal_kegiatan = $_POST['tanggal_kegiatan'];

			$query ="update tbl_galeri set nama_kegiatan='$nama_kegiatan', jenis_kegiatan='$jenis_kegiatan', deskripsi_kegiatan='$deskripsi_kegiatan', tanggal_kegiatan='$tanggal_kegiatan' where no='$no'";

			$update = mysqli_query($mysql, $query);

			if($update)
				{
					echo "<script language='javascript'>alert('Berhasil update pesanan !'); document.location='edit_kegiatan.php?no=$no'</script>";
					echo $no;
				}
			
			else
				{

					echo "<script language='javascript'>alert('Gagal update pesanan !'); document.location='edit_kegiatan.php?no=$no'</script>";
				}

}

?>
