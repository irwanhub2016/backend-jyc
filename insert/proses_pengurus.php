<?php 
		include '../main/db.php';

		$url = 'http://localhost/backend-jyc';

		if($_POST['submit'])
		{

//			$tabel = "SELECT * FROM kegiatan";
//			$query = mysql_query($tabel);

			$nama_pengurus = $_POST['nama'];
			$no_telp = $_POST['no_telp'];
			$divisi = $_POST['divisi'];
			$jabatan = $_POST['jabatan'];

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

					$query = mysqli_query($mysql, "INSERT INTO tbl_pengurus (nama,no_telp,divisi,jabatan,foto,status) VALUES ('$nama_pengurus','$no_telp','$divisi','$jabatan','$nama','aktif')");

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