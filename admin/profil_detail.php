<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TRIDHARMA ADMIN</title>
  
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
                  <h2 class="fw-bold">Profil Dosen</h2>
                  <p class="m-0">
                    Sistem Informasi Tridharma Universitas Negeri Medan
                  </p>
                </div>
              </div>
              <!-- ringkasan profil -->
              <div class="row profile-dosen mb-3">
                <div class="col-lg-12">
                  <div class="profile-wrapper">
                    <div class="wrapper-body rounded-4 p-4">
                      <div class="row align-items-center">
                        <div class="col-lg-3 text-center my-4 px-xl-0">
                          <img src="../app/assets/img/profil.jfif" alt="Profile" />
                        </div>
                        <div class="col-lg-9 pt-lg-4">
                          <div class="table-responsive ps-lg-3 ps-xl-0">
                            <table
                              class="table table-striped table-borderless mb-0"
                            >
                              <tbody>
                                <tr>
                                  <th width="30%">NIP</th>
                                  <td>12345678</td>
                                </tr>
                                <tr>
                                  <th>Nama</th>
                                  <td>John Doe</td>
                                </tr>
                                <tr>
                                  <th>Fungsional Jabatan</th>
                                  <td>Wakil Rektor</td>
                                </tr>
                                <tr>
                                  <th>NIDN</th>
                                  <td>12345678</td>
                                </tr>
                                <tr>
                                  <th>Jenis Kelamin</th>
                                  <td>Laki-Laki</td>
                                </tr>
                                <tr>
                                  <th>Tempat, Tanggal lahir</th>
                                  <td>Medan</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>

                      <div class="row align-items-center">
                        <div class="col-lg-12">
                          <div class="table-responsive">
                            <table
                              class="table table-2 table-striped table-borderless"
                            >
                              <tbody>
                                <tr>
                                  <th width="20%">Alamat Email</th>
                                  <td>JohnDoe@unimed.ac.id</td>
                                </tr>
                                <tr>
                                  <th>Nomor Telepon/Hp</th>
                                  <td>+62</td>
                                </tr>
                                <tr>
                                  <th>Alamat Kantor</th>
                                  <td>Medan</td>
                                </tr>
                                <tr>
                                  <th>Lulusan yang telah dihasilkan</th>
                                  <td>Sarjana</td>
                                </tr>
                                <tr>
                                  <th>Mata Kuliah yang diampu</th>
                                  <td>Rekayasa Perangkat Lunak</td>
                                </tr>
                                <tr>
                                  <th>Tempat, Tanggal lahir</th>
                                  <td>Medan</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>

                      <div class="row button">
                        <div class="col-12 d-flex justify-content-end">
                          <div class="button-edit-wrapper me-2" style="width: 5em;">
                            <a class="btn-blue btn w-100" style="background-color: #002743; color:white">Edit</a>
                          </div>
                          <div class="button-hapus-wrapper" style="width: 5em;">
                            <a class="btn-blue btn w-100" style="border: 1px solid #002743;">Hapus</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ringkasan profil -->

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
