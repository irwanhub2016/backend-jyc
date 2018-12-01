<?php
include "../session.php";
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Admin - Jakarta JYC</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
<!--        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <!-- <a class="dropdown-item" href="#">Activity Log</a> -->
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Administrasi</h6>
            <a class="dropdown-item" href="kegiatan.php">Kegiatan</a>
            <a class="dropdown-item" href="kepengurusan.php">Pengurus</a>
            <a class="dropdown-item" href="galeri.php">Galeri</a>
          </div>
        </li>
<!--        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a> -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="informasi.php">
            <i class="fas fa-fw fa-comments"></i>
            <span>Layanan Informasi</span></a>
        </li>
<!--        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a> -->
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="../index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Edit Data Pengurus</li>
          </ol>

          <!-- Area Chart Example 
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Area Chart Example</div>
            <div class="card-body">
              <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div> -->

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Edit Kegiatan</div>
                            <?php

                            if (isset($_GET['no'])) 
                            {

                            $no = $_GET['no'];


                                  if($no==$no)

                                {

                                  panggil_kueri(); 
                                  
                                }

                            }

                            function no()
                            {

                            global $no;

                            }
                            function panggil_kueri()
                            {
                                global $no;

                                include '../main/db.php';

                                $queri="select * from tbl_galeri where no = '$no'"; 

                                $hasil=mysqli_query($mysql, $queri);   

                                  if(mysqli_num_rows($hasil)==0)
                                  {
                                    echo "<script language='javascript'>alert('Maaf, kegiatan tidak terdaftar'); document.location='../kegiatan.php'</script>";
                                    
                                  }
                                  else 
                                  {
                                        //$query = "SELECT nomor_register, nomor_antrian, jenis_pelayanan, tanggal_order, NIK, id_customer, status_antrian, jam_order, jam_selesai, no_loket FROM riwayat_antrian WHERE nomor_register = '$no'";

                                        $query = "SELECT no, nama_kegiatan, tanggal_kegiatan, jenis_kegiatan, deskripsi_kegiatan, keterangan from tbl_galeri where no = '$no'";

                                        $sql = mysqli_query ($mysql, $query);
                                        while ($hasil = mysqli_fetch_array ($sql)) 
                                        {
                                            $GLOBALS['no'] =  $hasil['no'];
                                            $GLOBALS['nama_kegiatan'] =  $hasil['nama_kegiatan'];
                                            $GLOBALS['jenis_kegiatan'] =  $hasil['jenis_kegiatan'];
                                            $GLOBALS['tanggal_kegiatan'] =  $hasil['tanggal_kegiatan'];
                                            $GLOBALS['deskripsi_kegiatan'] =  $hasil['deskripsi_kegiatan'];
                                            $GLOBALS['keterangan'] =  $hasil['keterangan'];
//                                            global $y;
                                        }
                                  }
                               
                            }
                            ?>


        <div class="card-body">
          <form action="proses_edit_kegiatan.php?no=<?php echo $no;?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" name="nama_kegiatan" class="form-control" placeholder="First name" required="required" autofocus="autofocus" value="<?php echo $nama_kegiatan; ?>" >
                    <label for="firstName">Nama Kegiatan</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                     <div class="form-group">
                    <?php $default_state = $jenis_kegiatan;?>
                      <select class="form-control" name="jenis_kegiatan" >
                       <option value="lomba">Lomba</option>
                       <option value="pentas">Pentas</option>
                       <option value="latihan">Latihan</option>
                       <option value="kunjungan">Kunjungan</option>
                       <option value="rapat">Rapat</option>
                       </select>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <textarea class="form-control" name="deskripsi_kegiatan" rows="3" placeholder="<?php echo $deskripsi_kegiatan; ?>"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="date" id="firstName" name="tanggal_kegiatan" class="form-control" placeholder="First name" required="required" autofocus="autofocus" value="<?php echo $tanggal_kegiatan; ?>" >
                    <label for="firstName">Tanggal Kegiatan</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                  <?php $default_state = $keterangan;?>
                      <select class="form-control" name="jenis_kegiatan">
                      <option value='Publish'>Publish</option>
                      <option value='Unpublish'>Unpublish</option>
                       </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                  </div>
                </div>
              </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary btn-lg">
          </form>
        </div>

        </div>
      </div>

            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="main/logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="../js/demo/datatables-demo.js"></script>
    <script src="../js/demo/chart-area-demo.js"></script>

  </body>

</html>