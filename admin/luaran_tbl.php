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
              <!-- welcome -->
              <div class="row welcome p-2 justify-content-center">
                <div class="col-11 col-lg-12 welcome-text">
                  <h3 class="fw-bold">Luaran Hasil</h3>
                </div>
              </div>

              <!-- profil -->
              <div class="row table-section justify-content-center">
                <div class="col-11 col-lg-12">
                  <div class="wrapper-table p-3 rounded-4">
                    <div class="row button-section mb-3">
                      <div class="col-12">
                        <div class="button-tambah-wrapper">
                          <div class="dropdown">
                            <button class="btn btn-blue dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Tambah Luaran Hasil
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="buku_tambah.php">Buku</a></li>
                              <li><a class="dropdown-item" href="jurnal_tambah.php">Jurnal</a></li>
                              <li><a class="dropdown-item" href="makalah_tambah.php">Pemakalah Seminal Ilmiah</a></li>
                              <li><a class="dropdown-item" href="hki_tambah.php">HKI</a></li>
                              <li><a class="dropdown-item" href="kebijakan_tambah.php">Merumuskan Kebijakan Publik</a></li>
                              <li><a class="dropdown-item" href="penghargaan_tambah.php">Penghargaan Dalam</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row table-profil">
                      <div class="col-12">
                        <div class="table-responsive">
                          <table class="table" id="data-table">
                            <thead>
                              <th>No</th>
                              <th>NIDN</th>
                              <th>Nama</th>
                              <th>Action</th>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="fw-bold">1</td>
                                <td>12345678</td>
                                <td>John Doe</td>
                                <td class="button">
                                    <div
                                    class="accordion accordion-flush"
                                    id="accordionFlushExample"
                                    >
                                    <div class="accordion-item rounded-3">
                                        <p class="accordion-header rounded m-0">
                                        <button
                                            class="accordion-button collapsed px-3 py-2 rounded btn-blue"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseOne"
                                        >
                                            Luaran Hasil
                                        </button>
                                        </p>
                                        <div
                                        id="flush-collapseOne"
                                        class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample"
                                        >
                                        <div class="accordion-body">
                                            <div class="link-wrapper">
                                            <a
                                                href="buku_detail.php"
                                                class="nav-link px-2 py-1 rounded list-blue text-light mb-2"
                                                >Buku</a
                                            >
                                            </div>
                                            <div class="link-wrapper">
                                            <a
                                                href="jurnal_detail.php"
                                                class="nav-link px-2 py-1 rounded list-blue text-light mb-2 "
                                                >Jurnal</a
                                            >
                                            </div>
                                            <div class="link-wrapper">
                                            <a
                                                href="makalah_detail.php"
                                                class="nav-link px-2 py-1 rounded list-blue text-light mb-2"
                                                >Pemakalah Seminar Ilmiah</a
                                            >
                                            </div>
                                            <div class="link-wrapper">
                                            <a
                                                href="hki_detail.php"
                                                class="nav-link px-2 py-1 rounded list-blue text-light mb-2"
                                                >HKI</a
                                            >
                                            </div>
                                            <div class="link-wrapper">
                                            <a
                                                href="kebijakan_detail.php"
                                                class="nav-link px-2 py-1 rounded list-blue text-light mb-2"
                                                >Merumuskan Kebijakan publik</a
                                            >
                                            </div>
                                            <div class="link-wrapper">
                                            <a
                                                href="penghargaan_detail.php"
                                                class="nav-link px-2 py-1 rounded list-blue text-light"
                                                >Penghargaan Dalam</a
                                            >
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="fw-bold">2</td>
                                <td>13716163</td>
                                <td>Jontor</td>
                                <td class="button">
                                    <div
                                    class="accordion accordion-flush"
                                    id="accordionFlushExample"
                                    >
                                    <div class="accordion-item rounded-3">
                                        <p class="accordion-header rounded m-0">
                                        <button
                                            class="accordion-button collapsed px-3 py-2 rounded btn-blue"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseTwo"
                                        >
                                            Luaran Hasil
                                        </button>
                                        </p>
                                        <div
                                        id="flush-collapseTwo"
                                        class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample"
                                        >
                                        <div class="accordion-body">
                                            <div class="link-wrapper">
                                            <a
                                                href="buku_detail.php"
                                                class="nav-link px-2 py-1 rounded list-blue text-light mb-2"
                                                >Buku</a
                                            >
                                            </div>
                                            <div class="link-wrapper">
                                            <a
                                                href="jurnal_detail.php"
                                                class="nav-link px-2 py-1 rounded list-blue text-light mb-2 "
                                                >Jurnal</a
                                            >
                                            </div>
                                            <div class="link-wrapper">
                                            <a
                                                href="makalah_detail.php"
                                                class="nav-link px-2 py-1 rounded list-blue text-light mb-2"
                                                >Pemakalah Seminar Ilmiah</a
                                            >
                                            </div>
                                            <div class="link-wrapper">
                                            <a
                                                href="hki_detail.php"
                                                class="nav-link px-2 py-1 rounded list-blue text-light mb-2"
                                                >HKI</a
                                            >
                                            </div>
                                            <div class="link-wrapper">
                                            <a
                                                href="kebijakan_detail.php"
                                                class="nav-link px-2 py-1 rounded list-blue text-light mb-2"
                                                >Merumuskan Kebijakan publik</a
                                            >
                                            </div>
                                            <div class="link-wrapper">
                                            <a
                                                href="penghargaan_detail.php"
                                                class="nav-link px-2 py-1 rounded list-blue text-light"
                                                >Penghargaan Dalam</a
                                            >
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="fw-bold">3</td>
                                <td>71289382</td>
                                <td>Micho</td>
                                <td class="button">
                                    <div
                                    class="accordion accordion-flush"
                                    id="accordionFlushExample"
                                    >
                                    <div class="accordion-item rounded-3">
                                        <p class="accordion-header rounded m-0">
                                        <button
                                            class="accordion-button collapsed px-3 py-2 rounded btn-blue"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseThree"
                                        >
                                            Luaran Hasil
                                        </button>
                                        </p>
                                        <div
                                        id="flush-collapseThree"
                                        class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample"
                                        >
                                        <div class="accordion-body">
                                            <div class="link-wrapper">
                                            <a
                                                href="buku_detail.php"
                                                class="nav-link px-2 py-1 rounded list-blue text-light mb-2"
                                                >Buku</a
                                            >
                                            </div>
                                            <div class="link-wrapper">
                                            <a
                                                href="jurnal_detail.php"
                                                class="nav-link px-2 py-1 rounded list-blue text-light mb-2 "
                                                >Jurnal</a
                                            >
                                            </div>
                                            <div class="link-wrapper">
                                            <a
                                                href="makalah_detail.php"
                                                class="nav-link px-2 py-1 rounded list-blue text-light mb-2"
                                                >Pemakalah Seminar Ilmiah</a
                                            >
                                            </div>
                                            <div class="link-wrapper">
                                            <a
                                                href="hki_detail.php"
                                                class="nav-link px-2 py-1 rounded list-blue text-light mb-2"
                                                >HKI</a
                                            >
                                            </div>
                                            <div class="link-wrapper">
                                            <a
                                                href="kebijakan_detail.php"
                                                class="nav-link px-2 py-1 rounded list-blue text-light mb-2"
                                                >Merumuskan Kebijakan publik</a
                                            >
                                            </div>
                                            <div class="link-wrapper">
                                            <a
                                                href="penghargaan_detail.php"
                                                class="nav-link px-2 py-1 rounded list-blue text-light"
                                                >Penghargaan Dalam</a
                                            >
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- profil -->
            </div>
          </section>
          <!-- main content -->
        </div>
      </main>

      <!-- footer -->
      <?php include ('../app/layouts/layout_admin/footer_admin.php'); ?>
      <!-- footer -->

      <!-- main  -->
    </div>

    <!-- js -->
    <?php include ('../app/layouts/layout_admin/js_admin.php'); ?>
    <!-- js -->
  </body>
</html>
