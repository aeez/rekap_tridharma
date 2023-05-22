<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TRIDHARMA</title>
    <?php include ('../app/layouts/layout_admin/link_admin.php'); ?>
  </head>
  <body>
    <div class="wrapper-content">
      <!-- navbar -->
      <?php include ('../app/layouts/layout_admin/navbar_admin.php'); ?>
      <!-- navbar -->

      <!-- main  -->
      <main>
        <div class="main-wrapper d-flex">
          <!-- sidebar -->
          <?php include ('../app/layouts/layout_admin/sidebar_admin.php'); ?>
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

              <div class="row table-haki-section justify-content-center">
                <div class="col-11 col-lg-12 haki-table-wrapper py-3 rounded-4">
                  <div class="row heading-haki mb-3">
                    <div class="col-lg-12">
                      <h5 class="fw-bold">HKI</h5>
                    </div>
                  </div>

                  <div class="row table-section">
                    <div class="col-lg-12">
                      <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                          <tbody>
                            <tr>
                              <th>
                                Judul/tema/jenis rakayasa sosial lainnya yang
                                telah diterapkan
                              </th>
                              <td>
                                Pemanfaatan Meeting Bokashi pada Bulan Ramadhan
                              </td>
                            </tr>
                            <tr>
                              <th>Tahun</th>
                              <td>Bokashi adalah pupuk terbaik</td>
                            </tr>
                            <tr>
                              <th>Tempat Penerapan</th>
                              <td>Ruangan Seminar</td>
                            </tr>
                            <tr>
                              <th>Respon Masyarakat</th>
                              <td>
                                Sangat senang kaya ngeliat desain websitenya
                              </td>
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

                  <div class="row button">
                    <div class="col-12 d-flex justify-content-end">
                      <div class="button-edit-wrapper me-2" style="width: 5em">
                        <a
                          href="#"
                          class="btn-blue btn w-100"
                          style="background-color: #002743; color: white"
                          >Edit</a
                        >
                      </div>
                      <div class="button-hapus-wrapper" style="width: 5em">
                        <a
                          href="#"
                          class="btn-blue btn w-100"
                          style="border: 1px solid #002743"
                          >Hapus</a
                        >
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

      <?php include ('../app/layouts/layout_admin/footer_admin.php'); ?>
      <!-- main  -->
    </div>
    <?php include ('../app/layouts/layout_admin/js_admin.php'); ?>
  </body>
</html>
