<?php
include('./config/functions/dosen/functionAuth.php');
$result1 = mysqli_query($conn, "SELECT * FROM tb_dosen WHERE id_dosen = $_SESSION[id_dosen]");
$dataDosen = mysqli_fetch_array($result1);

$result2 = mysqli_query($conn, "SELECT * FROM tb_pengabdian WHERE id_dosen = $_SESSION[id_dosen]");
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
            <div class="container py-3">
              <!-- welcome -->
              <div
                class="row welcome py-2 mb-2 mb-lg-3 rounded-4 justify-content-center"
              >
                <div class="col-11 col-lg-12 welcome-text">
                  <h2 class="fw-bold">Pengabdian Masyarakat</h2>
                  <p class="m-0">
                    Sistem Informasi Tridharma Universitas Negeri Medan
                  </p>
                </div>
              </div>
              <!-- pengabdian -->
              <div class="row pengabdian-dosen justify-content-center mb-4">
                <div class="col-lg-12">
                    <?php while ($data = mysqli_fetch_array($result2)) { ?>
                  <div class="pengabdian-wrapper mb-4">
                    <div class="wrapper-body rounded-4 p-4 pb-0">
                      <row class="row align-items-center">
                        <div class="col-lg-12">
                          <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                              <tbody>
                                <tr>
                                  <th width="20%">Judul Pengabdian</th>
                                  <td>
                                    <?= $data['judul_pengabdian']; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <th>Tahun</th>
                                  <td><?= $data['tahun']; ?></td>
                                </tr>
                                <tr>
                                  <th>Pendanaan</th>
                                  <td></td>
                                </tr>
                                <tr>
                                  <th class="ps-4">1. Sumber Dana</th>
                                  <td><?= $data['sumber_dana']; ?></td>
                                </tr>
                                <tr>
                                  <th class="ps-4">2. Jumlah (Juta Rp.)</th>
                                  <td><?= $data['nominal_dana']; ?></td>
                                </tr>
                                <tr>
                                  <th>Link Google Drive</th>
                                  <td>
                                    <?= $data['link_file']; ?>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </row>
                    </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
              <!-- pengabdian -->
            </div>
          </section>
          <!-- main content -->
        </div>
      </main>

      <?php include ('./app/layouts/footer.php'); ?>
      <!-- main  -->
    </div>
    <?php include ('./app/layouts/js.php'); ?>
  </body>
</html>
