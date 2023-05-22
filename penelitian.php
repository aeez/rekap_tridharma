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
                  <h2 class="fw-bold">Penelitian Dosen</h2>
                  <p class="m-0">
                    Sistem Informasi Tridharma Universitas Negeri Medan
                  </p>
                </div>
              </div>
              <!-- penelitian -->
              <div class="row penelitian-dosen justify-content-center mb-4">
                <div class="col-lg-12">
                  <div class="penelitian-wrapper">
                    <div class="wrapper-body rounded-4 p-4 pb-0">
                      <row class="row align-items-center">
                        <div class="col-lg-12">
                          <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                              <tbody>
                                <tr>
                                  <th width="20%">Judul Penelitian</th>
                                  <td>
                                    Lorem ipsum dolor, sit amet consectetur
                                    adipisicing elit. Sint doloribus natus
                                    repudiandae qui vitae vero cumque.
                                  </td>
                                </tr>
                                <tr>
                                  <th>Tahun</th>
                                  <td>2015</td>
                                </tr>
                                <tr>
                                  <th>Pendanaan</th>
                                  <td></td>
                                </tr>
                                <tr>
                                  <th class="ps-4">1. Sumber Dana</th>
                                  <td>Universitas</td>
                                </tr>
                                <tr>
                                  <th class="ps-4">2. Jumlah (Juta Rp.)</th>
                                  <td>RP. 50 Juta</td>
                                </tr>
                                <tr>
                                  <th>Link Google Drive</th>
                                  <td>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Maxime at incidunt autem
                                    tenetur, ratione provident.
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </row>
                    </div>
                  </div>
                </div>
              </div>
              <!-- penelitian -->
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
