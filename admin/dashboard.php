<?php
include('../config/conn.php');
if (!isset($_SESSION['login'])) {
  header('location: auth_login.php');
}

if ($_SESSION['level'] == 'customer') {
  header('location:index.php');
}

$jumlahCustomer = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM customer"));
$jumlahPetugas = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM petugas"));
$jumlahMobil = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM mobil"));
$jumlahPeminjam = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM pemesanan WHERE status = 'Dipinjam'"));

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>DIRENT</title>
  <?php include('../app/layouts/css.php'); ?>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include('../app/layouts/sidebar.php'); ?>
    <!-- Sidebar -->

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

        <!-- TopBar -->
        <?php include('../app/layouts/topbar.php'); ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!--Row-->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-uppercase mb-1">Jumlah Customer</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahCustomer; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-12 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-uppercase mb-1">Jumlah Petugas</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahPetugas; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-shield fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-12 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-uppercase mb-1">Jumlah Mobil</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $jumlahMobil; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-car fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-12 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-uppercase mb-1">Mobil yang Dipinjamkan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahPeminjam; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-history fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Logout -->
          <?php include('../app/layouts/modalLogout.php'); ?>

        </div>
        <!---Container Fluid-->
      </div>

      <!-- Footer -->
      <?php include('../app/layouts/footer.php'); ?>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Js -->
  <?php include('../app/layouts/js.php'); ?>
</body>

</html>
