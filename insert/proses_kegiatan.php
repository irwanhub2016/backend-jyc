<?php 
		include '../main/db.php';

		$url = 'http://localhost/backend-jyc';

		if($_POST['submit'])
		{

//			$tabel = "SELECT * FROM kegiatan";
//			$query = mysql_query($tabel);

			$nama_kegiatan = $_POST['nama_kegiatan'];
			$jenis_kegiatan = $_POST['jenis_kegiatan'];
			$deskripsi_kegiatan = $_POST['deskripsi_kegiatan'];
			$tanggal_kegiatan = $_POST['tanggal_kegiatan'];

			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)
			{
				if($ukuran < 1044070)
				{			
					move_uploaded_file($file_tmp, '../file/'.$nama);

					$query = mysqli_query($mysql, "INSERT INTO tbl_galeri (nama_kegiatan,deskripsi_kegiatan,jenis_kegiatan,tanggal_kegiatan,foto_kegiatan) VALUES ('$nama_kegiatan','$deskripsi_kegiatan','$jenis_kegiatan','$tanggal_kegiatan','$nama')");

					if($query)
					{
						echo 'BERHASIL SIMPAN FOTO DI DATABASE';
						header("refresh:2;$url");
					}
					else
					{
						echo 'GAGAL SIMPAN GAMBAR DI DATABASE';
					}

					echo 'FILE BERHASIL DI UPLOAD';
				}

				else
				{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}

			else
			{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
		}

		else
		{
			echo "Gagal";
		}
		?>
