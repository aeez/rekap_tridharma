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
                          <form>
                            <div class="row justify-content-center">
                              <div class="col-lg-6">
                                <div class="mb-3">
                                  <label for="nip" class="form-label"
                                    >NIP</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="nip"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="nama" class="form-label"
                                    >Nama</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="nama"
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
                                    id="fungsionalJabatan"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="nidn" class="form-label"
                                    >NIDN</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="nidn"
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
                                    id="jenisKelamin"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="ttl" class="form-label"
                                    >Tempat, Tanggal Lahir</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="ttl"
                                    required
                                  />
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="mb-3">
                                  <label for="email" class="form-label"
                                    >Alamat Email</label
                                  >
                                  <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="nohp" class="form-label"
                                    >Nomor Telepon</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="nohp"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="alamat" class="form-label"
                                    >Alamat Kantor</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="alamat"
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
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="mkampu" class="form-label"
                                    >Mata Kuliah yang diampu</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="mkampu"
                                    required
                                  />
                                </div>
                                <div class="mb-3 mt-5">
                                  <button
                                    type="submit"
                                    class="btn btn-blue btn-outline-light"
                                  >
                                    Tambah
                                  </button>
                                </div>
                              </div>
                            </div>
                          </form>
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
