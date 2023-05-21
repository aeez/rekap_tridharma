<!-- header start -->
    <header class="fixed-top shadow-sm">
      <div class="scroll-up-btn">
        <i class="bi bi-caret-up-square-fill"></i>
      </div>
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand fst-italic fs-2" href="index.php">DIRENT</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarText"
            aria-controls="navbarText"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="about.php">ABOUT US</a>
              </li>
              <li class="nav-item mx-0 mx-lg-4">
                <a class="nav-link" href="catalogue.php">CATALOG</a>
              </li>
              <li class="nav-item">
                <?php if (isset($_SESSION['login'])) : ?>
                <a class="nav-link" href="pemesanan.php">BOOKING</a>
                <?php endif; ?>
              </li>
            </ul>
            <div class="btn-login dropdown">
              <?php if (isset($_SESSION['login'])) : ?>
                <a href="#"
                class="btn px-4 py-2 dropdown-toggle"
                role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"
                >Hi, <?= $_SESSION['nama_lengkap'] ?></a>
              <?php else : ?>
                <a href="login.php" class="btn px-4 py-2">SIGN IN / UP</a>
              <?php endif; ?>
                <div class="dropdown-menu
                dropdown-menu-dark
                dropdown-menu-lg-end"
                aria-labelledby="dropdownMenuButton2">
                    <a href="logout.php" class="dropdown-item">
                        <i class="bi bi-box-arrow-right me-3"></i>
                        Logout
                    </a>
                </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- header end -->
