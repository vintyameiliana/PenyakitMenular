<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Penyakit Menular</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="malaria.css">
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
                <a class="nav-link mx-lg-2" href="home.php">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link mx-lg-2 dropdown-toggle active" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Penyakit
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="malaria.php">Malaria</a></li>
                  <li><a class="dropdown-item" href="tbc.php">TBC</a></li>
                  <li><a class="dropdown-item" href="hiv.php">HIV/AIDS</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="alur.php">Alur</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="about.php">Tentang Kami</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
  </nav>

  <!---Header malaria--->
  <header>
    <div class="header">
      <h1>Penyakit Malaria</h1>
      <p style="font-size: 35px;">Provinsi Jawa Barat</p>
    </div>
  </header>

  <!--Section malaria-->
  <section class="content">
    <div class="main-content">
      <div class="box">
        <h2 style="font-size: 30px;">Dashboard Penyakit Malaria</h2>
          <div class="inner-box">
            <a style="font-size: 23px; color: #009970; text-decoration: none;" href="#pilihan1">Monitoring Malaria</a>
          </div>
          <div class="inner-box">
            <a style="font-size: 23px; color: #009970; text-decoration: none;" href="#pilihan2">Data</a>
          </div>
      </div>
    </div>
    <div class="side-content">
      <div id="pilihan1" class="pilihan">
        <h2 style="color: #009970; font-size: 45px">Monitoring Malaria</h2>
        <p style="font-size: 25px;">Informasi terkini tentang penyakit menular di Jawa Barat.</p>
        <p><iframe width="100%" height="450" src="https://lookerstudio.google.com/embed/reporting/69a0f70f-450b-4066-9d69-467c424e0821/page/Hpr1D" frameborder="0" style="border:0" allowfullscreen sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe></p>
      </div>
      <div id="pilihan2" class="pilihan">
        <h2 style="color: #009970; font-size: 45px">Data</h2>
        <table>
          <tr>
            <th>Id</th>
            <th>Kode Kabupaten Kota</th>
            <th>Nama Kabupaten Kota</th>
            <th>Jumlah Kasus</th>
            <th>Tahun</th>
          </tr>
          <?php
              // Data yang akan dimasukkan ke dalam tabel
                $data = array(
                  array(1, 3201, "KABUPATEN BOGOR", 5, 2021),
                  array(2, 3202, "KABUPATEN SUKABUMI", 7, 2021),
                  array(3, 3203, "KABUPATEN CIANJUR", 3, 2021),
                  array(4, 3204, "KABUPATEN BANDUNG", 12, 2021),
                  array(5, 3205, "KABUPATEN GARUT", 3, 2021),
                  array(6, 3206, "KABUPATEN TASIKMALAYA", 15, 2021),
                  array(7, 3207, "KABUPATEN CIAMIS", 0, 2021),
                  array(8, 3208, "KABUPATEN KUNINGAN", 0, 2021),
                  array(9, 3209, "KABUPATEN CIREBON", 3, 2021),
                  array(10, 3210, "KABUPATEN MAJALENGKA", 0, 2021),
                  array(11, 3211, "KABUPATEN SUMEDANG", 0, 2021),
                  array(12, 3212, "KABUPATEN INDRAMAYU", 19, 2021),
                  array(13, 3213, "KABUPATEN SUBANG", 3, 2021),
                  array(14, 3214, "KABUPATEN PURWAKARTA", 0, 2021),
                  array(15, 3215, "KABUPATEN KARAWANG", 0, 2021),
                  array(16, 3216, "KABUPATEN BEKASI", 0, 2021),
                  array(17, 3217, "KABUPATEN BANDUNG BARAT", 1, 2021),
                  array(18, 3218, "KABUPATEN PANGANDARAN", 4, 2021),
                  array(19, 3271, "KOTA BOGOR", 18, 2021),
                  array(20, 3272, "KOTA SUKABUMI", 3, 2021),
                  array(21, 3273, "KOTA BANDUNG", 8, 2021),
                  array(22, 3274, "KOTA CIREBON", 0, 2021),
                  array(23, 3275, "KOTA BEKASI", 3, 2021),
                  array(24, 3276, "KOTA DEPOK", 19, 2021),
                  array(25, 3277, "KOTA CIMAHI", 43, 2021),
                  array(26, 3278, "KOTA TASIKMALAYA", 10, 2021),
                  array(27, 3279, "KOTA BANJAR", 0, 2021),
                );

              // Loop untuk menambahkan baris tabel dari data
                foreach ($data as $row) {
                  echo "<tr>";
                  echo "<td>" . $row[0] . "</td>";
                  echo "<td>" . $row[1] . "</td>";
                  echo "<td>" . $row[2] . "</td>";
                  echo "<td>" . $row[3] . "</td>";
                  echo "<td>" . $row[4] . "</td>";
                  echo "</tr>";
                }
          ?>
        </table>
      </div>
    </div>
  </section>

  <!--Footer-->
  <section class="footer">
    <p>&copy; Departemen Layanan Informasi Kesehatan | Mahasiswa Manajemen Informasi Kesehatan Tahun Angkatan 2021</p>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>