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
                  <h2 class="fw-bold">Riwayat Pendidikan</h2>
                  <p class="m-0">
                    Sistem Informasi Tridharma Universitas Negeri Medan
                  </p>
                </div>
              </div>
              <!-- ringkasan profil -->

              <!-- ringkasan profil -->
              <div class="row profile-dosen mb-3">
                <div class="col-lg-12">
                  <div class="profile-wrapper">
                    <div class="wrapper-body rounded-4 p-4">
                      <div class="row align-items-center mt-4">
                        <div class="col-lg-12">
                          <div class="table-responsive">
                            <table
                              class="table table-2 table-striped table-borderless"
                            >
                              <thead>
                                <tr>
                                  <th>Perguruan Tinggi</th>
                                  <th>Bidang Ilmu</th>
                                  <th>Tahun Masuk</th>
                                  <th>Tahun Lulus</th>
                                  <th>Gelar Akademik</th>
                                  <th>Jenjang</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Institute Negeri Medan</td>
                                  <td>Ilmu Komputer</td>
                                  <td>2022</td>
                                  <td>2024</td>
                                  <td>S.Kom</td>
                                  <td>S1</td>
                                  <td class="d-flex">
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
                                  </td>
                                </tr>
                                <tr>
                                  <td>Universitas Arabic Center</td>
                                  <td>Ilmu Komputer Syariah</td>
                                  <td>2024</td>
                                  <td>2025</td>
                                  <td>M.Kom.S</td>
                                  <td>S2</td>
                                  <td class="d-flex">
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
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>

                      <div class="row button">
                        <div class="col-12 d-flex justify-content-end">
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- riwayat pendidikan -->

              <!-- riwayat pendidikan -->
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
