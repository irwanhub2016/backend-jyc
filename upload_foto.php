<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jakarta Youth Choir</title>

    <link rel="icon" href="file/logo.png">
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">


  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header"><img src="file/logo.png" height="50px"> Upload Foto Diri </div>
        <div class="card-body">

          <form action="process_upload.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <div class="form-label-group">

                <input type="text" id="inputEmail" class="form-control" placeholder="Nama Panggilan" name="nama_panggilan" required="required">
                <label for="inputEmail">Nama Panggilan</label>
              </div>
            </div>

            <div class="form-group">
              <div class="form-label-group">

                      <select class="form-control" name="jenis_suara" required>
                       <option value="">Jenis Suara</option>
                       <option value="sopran_1">Sopran 1</option>
                       <option value="sopran_2">Sopran 2</option>
                       <option value="alto_1">Alto 1</option>
                       <option value="alto_2">Alto 2</option>
                       <option value="tenor_1">Tenor 1</option>
                       <option value="tenor_2">Tenor 2</option>
                       <option value="bass_1">Bass 1</option>
                       <option value="bass_2">Bass 2</option>

                       </select>

              </div>

            </div>
            <div class="form-group">
              <div class="form-label-group">

                <input type="file" name="file" id="inputEmail" class="form-control" placeholder="foto kegiatan" required="required">
                <label for="inputEmail">Upload Foto</label>
              </div>
              
            </div>
            <button type="reset" name="reset" class="btn btn-warning btn-lg">Reset</button>
            <input type="submit" name="submit" class="btn btn-primary btn-lg">
          </form>

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
