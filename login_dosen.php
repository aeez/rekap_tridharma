<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TRIDHARMA</title>

    <?php include ('./app/layouts/tridharma_layout/link.php'); ?>

  </head>
  <body>
    <div class="wrapper-content">
      <!-- main  -->
      <main>
        <div class="main-wrapper d-flex">
          <!-- main content -->
          <section class="main-content w-100 bg-light">
            <div class="container py-3">
              <!-- login form -->
              <div class="row justify-content-center align-items-center vh-100">
                <div class="login-card col-lg-4 col-10 p-4 rounded-3">
                  <div class="login-form py-3 px-3">
                    <div class="header-form">
                      <div class="logo-form mb-4">
                        <div class="header-form">
                          <div class="d-flex align-items-center">
                            <div class="logo me-3">
                              <img
                                src="app/assets/img/Logo.png"
                                class="img-fluid"
                                alt="logo UNIMED"
                              />
                            </div>
                            <div class="logo-name">
                              <p class="m-0 fw-bold fs-4">TRIDHARMA</p>
                              <small>Ilmu Komputer</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="header-text-form">
                        <p class="fw-bold mx-0 my-1">Halo! Selamat Datang</p>
                        <small>Silahkan masuk untuk melanjutkan</small>
                      </div>
                    </div>
                    <div class="main-login-form mt-4">
                      <form>
                        <div class="mb-4">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="NIDN"
                          />
                        </div>
                        <div class="mb-4">
                          <input
                            type="password"
                            class="form-control"
                            placeholder="Password"
                          />
                        </div>
                        <div class="text-center">
                          <button
                            type="submit"
                            class="btn text-white px-4 w-100 rounded-3"
                          >
                            Masuk
                          </button>
                        </div>
                      </form>
                    </div>
                    <div class="login-footer text-center mt-4">
                      <small>
                        Tidak bisa Masuk?
                        <span><a href="#">Hubungi Admin!</a></span>
                      </small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- main content -->
        </div>
      </main>
      <!-- main  -->
    </div>
    <?php include ('./app/layouts/tridharma_layout/js.php'); ?>
  </body>
</html>
