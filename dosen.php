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
                  <h2 class="fw-bold">Profil Dosen</h2>
                  <p class="m-0">
                    Sistem Informasi Tridharma Universitas Negeri Medan
                  </p>
                </div>
              </div>
              <!-- ringkasan profil -->
              <div class="row profile-dosen">
                <div class="col-lg-12">
                  <div class="profile-wrapper">
                    <div class="wrapper-body rounded-4 p-4">
                      <h5 class="wrapper-title fw-bold">1. Ringkasan Profil</h5>
                      <div class="row align-items-center">
                        <div class="col-lg-3 text-center my-4 px-xl-0">
                          <img src="https://berita.99.co/wp-content/uploads/2022/06/memakai-topi.jpg"  alt="Profile" />
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
                      <row class="row align-items-center">
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
                      </row>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ringkasan profil -->
              <div class="row profile-dosen my-5">
                <div class="col-lg-12">
                  <div class="profile-wrapper">
                    <div class="wrapper-body rounded-4 p-4">
                      <h5 class="wrapper-title fw-bold">
                        2. Riwayat Pendidikan
                      </h5>
                      <row class="row align-items-center mt-4">
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
                                </tr>
                                <tr>
                                  <td>Universitas Arabic Center</td>
                                  <td>Ilmu Komputer Syariah</td>
                                  <td>2024</td>
                                  <td>2025</td>
                                  <td>M.Kom.S</td>
                                  <td>S2</td>
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
              <!-- riwayat pendidikan -->

              <!-- riwayat pendidikan -->
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