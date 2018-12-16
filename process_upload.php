<?php 
		include 'main/db.php';


		if($_POST['submit'])
		{

			ini_set('date.timezone', 'Asia/Jakarta');
			
			$nama_panggilan = $_POST['nama_panggilan'];
			$jenis_suara = $_POST['jenis_suara'];

			$time = date("Y-m-d H:i");

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
					move_uploaded_file($file_tmp, 'file/pengurus/'.$nama);

					$query = mysqli_query($mysql, "INSERT INTO tabel_upload_foto (nama_panggilan,jenis_suara,foto,waktu_upload) VALUES ('$nama_panggilan','$jenis_suara','$nama','$time')");

					if($query)
					{
						echo "<script language='javascript'>alert('Berhasil tambah data'); document.location='upload_foto.php'</script>";
					}
					else
					{
						echo "<script language='javascript'>alert('Gagal simpan data'); document.location='upload_foto.php'</script>";
					}
				}

				else
				{
						echo "<script language='javascript'>alert('Ukuran File Terlalu Besar'); document.location='upload_foto.php'</script>";
				}
			}

			else
			{
					echo "<script language='javascript'>alert('Jenis File tidak didukung'); document.location='upload_foto.php'</script>";
			}
		}

		else
		{
						echo "<script language='javascript'>alert('Error'); document.location='upload_foto.php'</script>";
		}
		?>
