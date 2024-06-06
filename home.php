<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Penyakit Menular</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
                <a class="nav-link mx-lg-2 active" aria-current="page" href="home.php">Beranda</a>
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
                <a class="nav-link mx-lg-2" href="about.php">Tentang Kami</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
  </nav>

    <!---HEADER SECTION---------->
  <section class="header-container">
      <div class="header-content">
        <h2>Dashboard Penyakit Menular</h2>
        <div class="line"></div>
        <h1> Provinsi Jawa Barat </h1>
        <a href="#penyakit" class="button">Pelajari Lebih Lanjut</a>
      </div>
      <div class="grafik-utama overflow-x-auto ">
        <iframe width="100%" height="450" src="https://lookerstudio.google.com/embed/reporting/d3b89f5b-166b-4ccc-a7c5-23f98dd7c953/page/dHx1D" class="object-fit-contain border rounded" frameborder="2" style="border:0" allowfullscreen sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>
      </div>
  </section>

    <!--SECTION PENYAKIT--------->
  <section id="penyakit" class="penyakit overflow-auto">
      <div class="title">
        <h1> Penyakit Menular </h1>
        <div class="line"></div>
        </div>
      <div class="row">
        <div class="col">
          <h4>Malaria</h4>
          <p>Malaria adalah penyakit menular yang disebabkan oleh parasit Plasmodium, yang ditularkan melalui gigitan nyamuk Anopheles betina yang terinfeksi</p>
          <a href="malaria.php" class="button">Dashboard</a>
        </div>
        <div class="col">
          <h4>Tuberculosis</h4>
          <p>Tuberkulosis (TB) adalah penyakit menular yang disebabkan oleh bakteri Mycobacterium tuberculosis</p>
          <a href="tbc.php" class="button">Dashboard</a>
        </div>
        <div class="col">
        <h4>HIV/AIDS</h4>
        <p>HIV (Human Immunodeficiency Virus) adalah virus yang menyerang sistem kekebalan tubuh dengan merusak sel T CD4, yang merupakan bagian penting dalam melawan infeksi. Jika tidak diobati, HIV dapat berkembang menjadi AIDS (Acquired Immunodeficiency Syndrome), yang merupakan tahap akhir dari infeksi HIV</p>
        <a href="hiv.php" class="button">Dashboard</a>
      </div>
  </section>

    <!--SECTION ALUR--------->
  <section class="alur">
    <div class="alur-content">
      <h1>Tutorial Pengolahan Data</h1>
      <div class="line"></div>
        <p>Alur pengolahan hasil visualisasi data dalam bentuk diagram dari perolehan sumber data Open Data Jawa Barat dan Badan Pusat Statistik</p>
        <a href="Alur.php" class="button">Pelajari Lebih Lanjut</a>
    </div>
  </section>

    <!--SECTION FOOTER--------->
  <section class="footer">
   <p>&copy;Departemen Layanan Informasi Kesehatan | Mahasiswa Manajemen Informasi Kesehatan Tahun Angkatan 2021</p> 
  </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>