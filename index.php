<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TRIDHARMA</title>

    <?php include ('./app/layouts/tridharma_layout/link.php'); ?>
  </head>
  <body>
    <div class="wrapper-content">
      <!-- navbar -->
      <?php include ('./app/layouts/tridharma_layout/navbar.php'); ?>
      <!-- navbar -->

      <!-- main  -->
      <main>
        <div class="main-wrapper d-flex">
          <!-- sidebar -->
          <?php include ('./app/layouts/tridharma_layout/sidebar.php'); ?>
          <!-- sidebar -->

          <!-- main content -->
          <section class="main-content w-100 bg-light">
            <div class="container py-4">
              <!-- welcome -->
              <div
                class="row welcome p-2 mb-2 mb-lg-3 rounded-4 justify-content-center"
              >
                <div class="col-11 col-lg-12 welcome-text">
                  <h3 class="fw-bold">Selamat Datang, John Doe</h3>
                  <p class="m-0">
                    Sistem Informasi Tridharma Universitas Negeri Medan
                  </p>
                </div>
              </div>

              <!-- profil -->
              <div
                class="row profile-identity justify-content-center justify-content-lg-between"
              >
                <div class="col-11 col-lg-3 profile-section rounded-4 py-4">
                  <div
                    class="profile-image-wrapper d-flex justify-content-center"
                  >
                    <img src="app/assets/img/profil.jfif" alt="Profile" />
                  </div>
                </div>
                <div
                  class="col-11 col-lg-4 identity-section p-3 my-3 my-lg-0 rounded-4"
                >
                  <div class="identity-wrapper">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td class="fw-bold">Nama</td>
                          <td>John Doe</td>
                        </tr>
                        <tr>
                          <td class="fw-bold">Fungsional Jabatan</td>
                          <td>Wakil Rektor</td>
                        </tr>
                        <tr>
                          <td class="fw-bold">NIP</td>
                          <td>12345678</td>
                        </tr>
                        <tr>
                          <td class="fw-bold">NIDN</td>
                          <td>12345678</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

                <!-- education -->
                <div class="col-11 col-lg-4 education-section p-3 rounded-4">
                  <div class="education-wrapper">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td class="fw-bold">Nama Perguruan Tinggi</td>
                          <td>Institut Negeri Medan</td>
                        </tr>
                        <tr>
                          <td class="fw-bold">Bidang Ilmu</td>
                          <td>Web Developer</td>
                        </tr>
                        <tr>
                          <td class="fw-bold">Tahun Masuk-Lulus</td>
                          <td>2020-2024</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- education -->
              </div>
              <!-- profil -->
            </div>
          </section>
          <!-- main content -->
        </div>
      </main>

      <!-- footer -->
      <?php include ('./app/layouts/tridharma_layout/footer.php'); ?>
      <!-- footer -->
      
      <!-- main  -->
    </div>
    
    <!-- js -->
    <?php include ('./app/layouts/tridharma_layout/js.php'); ?>
    <!-- js -->
  </body>
</html>
