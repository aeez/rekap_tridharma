<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tambah Dosen | Tri Dharma</title>

    <?php include ('../app/layouts/layout_admin/link_admin2.php'); ?>

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
                class="row welcome py-2 mb-4 rounded-4 justify-content-center"
              >
                <div class="col-11 col-lg-12 welcome-text">
                  <h2 class="fw-bold">Tambah Dosen</h2>
                </div>
              </div>
              <!-- tambah dosen -->
              <div class="row profile-dosen justify-content-center">
                <div class="col-lg-12">
                  <div class="profile-wrapper">
                    <div class="wrapper-body rounded-4 p-4">
                      <div class="row tambah-dosen">
                        <div class="form-tambah">
                            <!-- form tambah start -->
                          <form action="" method="POST">
                            <div class="row justify-content-center">
                              <div class="col-lg-6">
                                <div class="mb-3">
                                  <label for="nama" class="form-label"
                                    >Nama</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="nama"
                                    name="nama"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="tempat_lahir" class="form-label"
                                    >Tempat Lahir</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="tempat_lahir"
                                    name="tempat_lahir"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="tanggal_lahir" class="form-label"
                                    >Tanggal Lahir</label
                                  >
                                  <input
                                    type="date"
                                    class="form-control"
                                    id="tanggal_lahir"
                                    name="tanggal_lahir"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="jenisKelamin" class="form-label"
                                    >Jenis Kelamin</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="jenis_kelamin"
                                    name="jenis_kelamin"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label
                                    for="fungsionalJabatan"
                                    class="form-label"
                                    >Fungsional Jabatan</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="jabatan_fungsional"
                                    name="jabatan_fungsional"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="nip" class="form-label"
                                    >NIP</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="nip"
                                    name="nip"
                                    required
                                  />
                                </div>

                              </div>
                              <div class="col-lg-6">
                                <div class="mb-3">
                                  <label for="nidn" class="form-label"
                                    >NIDN</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="nidn"
                                    name="nidn"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="alamat_email" class="form-label"
                                    >Alamat Email</label
                                  >
                                  <input
                                    type="email"
                                    class="form-control"
                                    id="alamat_email"
                                    name="alamat_email"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="no_hp" class="form-label"
                                    >Nomor Handphone</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="no_hp"
                                    name="no_hp"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="alamat_kantor" class="form-label"
                                    >Alamat Kantor</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="alamat_kantor"
                                    name="alamat_kantor"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="lulusan" class="form-label"
                                    >Lulusan yang telah dihasilkan</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="lulusan"
                                    name="lulusan"
                                    required
                                  />
                                </div>

                                <div class="mb-3 mb-lg-0">
                                  <label for="password" class="form-label"
                                    >Password</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="password"
                                    name="password"
                                    required
                                  />
                                </div>

                              </div>
                              <div class="">
                                  <button
                                    type="submit"
                                    name="submit"
                                    class="btn btn-blue btn-outline-success"
                                  >
                                    Tambah
                                  </button>
                                </div>

                            </div>
                          </form>
                         <!-- form tambah dosen -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- tambah dosen -->
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
