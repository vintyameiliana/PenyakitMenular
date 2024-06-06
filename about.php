<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="about.css" rel="stylesheet">
  </head>
  
  <body>
    <!---NAVBAR-------------->
  <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="home.php">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Dashboard</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link mx-lg-2"  href="home.php">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link mx-lg-2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Penyakit
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="malaria.php">Malaria</a></li>
                  <li><a class="dropdown-item" href="tbc.php">TBC</a></li>
                  <li><a class="dropdown-item" href="hiv.php">HIV/AIDS</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="alur.php">Tutorial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2 active" aria-current="page" href="about.php">Tentang Kami</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
  </nav>


<section class="header">
  <h1>Kelompok 1</h1>
  <div class="line"></div>
</section>


<section class="anggota-kelompok">
      <div class="row">
      <div class="col-sm-2 mb-1 mb-sm-0"  style="width: 14rem;">
          <img src="images/adelia.png" class="card-img-top" alt="...">
          <div class="card">
          <div class="card-body">
              <h5 class="card-title">ADELIA FITRI KUSUMADEWI</h5>
              <p class="card-text">MIK 2021</p>

          </div>
          </div>
      </div>
      <div class="col-sm-2 mb-1 mb-sm-0"  style="width: 14rem;">
          <img src="images/della.png" class="card-img-top" alt="...">
          <div class="card">
          <div class="card-body">
              <h5 class="card-title">DELLA HANI SEPTIANA</h5>
              <p class="card-text">MIK 2021</p>

          </div>
          </div>
      </div>
      <div class="col-sm-2 mb-1 mb-sm-0"  style="width: 14rem;">
          <img src="images/farah.png" class="card-img-top" alt="...">
          <div class="card">
          <div class="card-body">
              <h5 class="card-title">FARAH ALYA LUTHFIYYAH</h5>
              <p class="card-text">MIK 2021</p>

          </div>
          </div>
      </div>
      <div class="col-sm-2 mb-1 mb-sm-0"  style="width: 14rem;">
          <img src="images/chacha.png" class="card-img-top" alt="...">
          <div class="card">
          <div class="card-body">
              <h5 class="card-title">NATHANIELLA JOVANKA A A P</h5>
              <p class="card-text">MIK 2021</p>

          </div>
          </div>
      </div>
      <div class="col-sm-2 mb-1 mb-sm-0"  style="width: 14rem;">
          <img src="images/alvi.png" class="card-img-top" alt="...">
          <div class="card">
          <div class="card-body">
              <h5 class="card-title">RIDHA NUR ALVIANI</h5>
              <p class="card-text">MIK 2021</p>

          </div>
          </div>
      </div>
      <div class="col-sm-2 mb-1 mb-sm-0"  style="width: 14rem;">
          <img src="images/vintya.png" class="card-img-top" alt="...">
          <div class="card">
          <div class="card-body">
              <h5 class="card-title">VINTYA MEILIANA P N</h5>
              <p class="card-text">MIK 2021</p>

          </div>
          </div>
      </div>
      </div>
  </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>



