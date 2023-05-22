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
                  <div class="pengabdian-wrapper">
                    <div class="wrapper-body rounded-4 p-4">
                      <div class="row align-items-center">
                        <div class="col-lg-12">
                          <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                              <tbody>
                                <tr>
                                  <th width="20%">Judul pengabdian</th>
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
                      </div>

                      <div class="row button">
                        <div class="col-12 d-flex justify-content-end">
                          <div
                            class="button-edit-wrapper me-2"
                            style="width: 5em"
                          >
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
                              class="btn w-100"
                              style="border: 1px solid #002743"
                              >Hapus</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- pengabdian -->
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
