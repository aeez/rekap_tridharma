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
                              <tbody>
                                <tr>
                                  <th width="20%">Jenjang Pendidikan</th>
                                  <th>S1</th>
                                  <th>S2</th>
                                  <th>S3</th>
                                </tr>
                                <tr>
                                  <th>Nama Perguruan Tinggi</th>
                                  <td>Universitas Negeri Medan</td>
                                  <td>Universitas Negeri Medan</td>
                                  <td>Universitas Negeri Medan</td>
                                </tr>
                                <tr>
                                  <th>Bidang Ilmu</th>
                                  <td>Ilmu Komputer</td>
                                  <td>Ilmu Komputer</td>
                                  <td>Ilmu Komputer</td>
                                </tr>
                                <tr>
                                  <th>Tahun Masuk-Lulus</th>
                                  <td>2010-2014</td>
                                  <td>2010-2014</td>
                                  <td>2010-2014</td>
                                </tr>
                                <tr>
                                  <th>Judul Skripsi/Thesis/Disertasi</th>
                                  <td>
                                    Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Quia, quam.
                                  </td>
                                  <td>
                                    Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Quia, quam.
                                  </td>
                                  <td>
                                    Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Quia, quam.
                                  </td>
                                </tr>
                                <tr>
                                  <th>Nama Pembimbing/Promotor</th>
                                  <td>Joen Doe</td>
                                  <td>Joen Doe</td>
                                  <td>Joen Doe</td>
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
