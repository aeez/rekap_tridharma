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
              <!-- book -->
              <div
                class="row makalah-title justify-content-center mb-2 mb-lg-3"
              >
                <div class="col-11 col-lg-12">
                  <div class="makalah-title-wrapper py-2">
                    <h2 class="fw-semibold">Luaran Hasil</h2>
                    <h6 class="text">
                      Sistem Informasi Tridharma Universitas Negeri Medan
                    </h6>
                  </div>
                </div>
              </div>

              <div class="row table-penghargaan-section justify-content-center">
                <div
                  class="col-11 col-lg-12 penghargaan-table-wrapper py-3 rounded-4"
                >
                  <div class="row heading-penghargaan mb-3">
                    <div class="col-lg-12">
                      <h5 class="fw-bold">Penghargaan Dalam</h5>
                    </div>
                  </div>

                  <div class="row table-section">
                    <div class="col-lg-12">
                      <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                          <tbody>
                            <tr>
                              <th>jenis Penghargaan</th>
                              <td>Medali Perak</td>
                            </tr>
                            <tr>
                              <th>Institusi Pemberi Penghargaan</th>
                              <td>Institut Negeri Medan</td>
                            </tr>
                            <tr>
                              <th>Tahun</th>
                              <td>2023</td>
                            </tr>
                            <tr>
                              <th>Link Google Drive File</th>
                              <td>https//unimed.com</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- book -->
            </div>
          </section>
          <!-- main content -->
        </div>
      </main>

      <?php include ('./app/layouts/tridharma_layout/footer.php'); ?>
      <!-- main  -->
    </div>
    <?php include ('./app/layouts/tridharma_layout/js.php'); ?>
  </body>
</html>
