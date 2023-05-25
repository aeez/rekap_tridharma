<?php
include('./config/functions/dosen/functionAuth.php');

// $dosen_id = $_SESSION['id_dosen'];
$result = mysqli_query($conn, "SELECT * FROM tb_dosen WHERE id_dosen = $_SESSION[id_dosen]");
$dataDosen = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TRIDHARMA</title>
    <?php include ('./app/layouts/link.php'); ?>
  </head>
  <body>
    <div class="wrapper-content">
      <!-- navbar -->
      <?php include ('./app/layouts/navbar.php'); ?>
      <!-- navbar -->

      <!-- main  -->
      <main>
        <div class="main-wrapper d-flex">
          <!-- sidebar -->
          <?php include ('./app/layouts/sidebar.php'); ?>
          <!-- sidebar -->

          <!-- main content -->
          <section class="main-content w-100 bg-light">
            <div class="container py-4">
              <!-- welcome -->
              <div
                class="row welcome p-2 mb-2 mb-lg-3 rounded-4 justify-content-center"
              >
                <div class="col-11 col-lg-12 welcome-text">
                  <h3 class="fw-bold">Selamat Datang, <?= $dataDosen['nama']; ?></h3>
                  <p class="m-0">
                    Sistem Informasi Tridharma Universitas Negeri Medan
                  </p>
                </div>
              </div>

              <!-- profil -->
              <div
                class="row profile-identity justify-content-center justify-content-lg-around mb-4"
              >
                <div class="col-11 col-lg-3 profile-section rounded-4 py-4">
                  <div
                    class="profile-image-wrapper d-flex justify-content-center"
                  >
                    <img src="./app/img/<?= $dataDosen['gambar']; ?>" alt="Profile" />
                  </div>
                </div>
                <div
                  class="col-11 col-lg-8 identity-section p-3 my-3 my-lg-0 rounded-4"
                >
                  <div class="identity-wrapper">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td class="fw-bold">Nama</td>
                          <td><?= $dataDosen['nama']; ?></td>
                        </tr>
                        <tr>
                          <td class="fw-bold">Fungsional Jabatan</td>
                          <td><?= $dataDosen['jabatan_fungsional']; ?></td>
                        </tr>
                        <tr>
                          <td class="fw-bold">NIP</td>
                          <td><?= $dataDosen['nip']; ?></td>
                        </tr>
                        <tr>
                          <td class="fw-bold">NIDN</td>
                          <td><?= $dataDosen['nidn']; ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- profil -->

              <!-- item -->
              <div class="row item-section">
                <div class="col-lg-12">
                  <div class="wrapper-item">
                    <div class="row item-content justify-content-around mb-3">
                      <div class="col-12 col-lg-6 col-item">
                        <div class="item-wrapper rounded-4 p-3" style="background-color: white;">
                          <span>Jumlah Penelitian</span>
                          <p class="fs-4 fw-bold m-0">5</p>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6">
                        <div class="item-wrapper rounded-4 p-3" style="background-color: white;">
                          <span>Jumlah Pengabdian Masyarakat</span>
                          <p class="fs-4 fw-bold m-0">2</p>
                        </div>
                      </div>
                    </div>
                    <div class="row item-content justify-content-around mb-3">
                      <div class="col-12 col-lg-6">
                        <div class="item-wrapper rounded-4 p-3" style="background-color: white;">
                          <span>Jumlah Buku</span>
                          <p class="fs-4 fw-bold m-0">3</p>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6">
                        <div class="item-wrapper rounded-4 p-3" style="background-color: white;">
                          <span>Jumlah Jurnal</span>
                          <p class="fs-4 fw-bold m-0">1</p>
                        </div>
                      </div>
                    </div>
                    <div class="row item-content justify-content-around mb-3">
                      <div class="col-12 col-lg-6 ">
                        <div class="item-wrapper rounded-4 p-3" style="background-color: white;">
                          <span>Jumlah Pemakalah Seminar Ilmiah</span>
                          <p class="fs-4 fw-bold m-0">2</p>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6">
                        <div class="item-wrapper rounded-4 p-3" style="background-color: white;">
                          <span>Jumlah HKI</span>
                          <p class="fs-4 fw-bold m-0">3</p>
                        </div>
                      </div>
                    </div>
                    <div class="row item-content justify-content-around mb-3">
                      <div class="col-12 col-lg-6">
                        <div class="item-wrapper rounded-4 p-3" style="background-color: white;">
                          <span>Jumlah Merumuskan Kebijakan Publik</span>
                          <p class="fs-4 fw-bold m-0">4</p>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6">
                        <div class="item-wrapper rounded-4 p-3" style="background-color: white;">
                          <span>Jumlah Pengabdian Penghargaan Dalam</span>
                          <p class="fs-4 fw-bold m-0">1</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- item -->
            </div>
          </section>
          <!-- main content -->
        </div>
      </main>

      <!-- footer -->
      <?php include ('./app/layouts/footer.php'); ?>
      <!-- footer -->
      
      <!-- main  -->
    </div>
    
    <!-- js -->
    <?php include ('./app/layouts/js.php'); ?>
    <!-- js -->
  </body>
</html>
