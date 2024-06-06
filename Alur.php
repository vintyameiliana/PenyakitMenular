<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ALUR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="alur.css"> 
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
                <a class="nav-link mx-lg-2 active" aria-current="page" href="alur.php">Tutorial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="about.php">Tentang Kami</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
  </nav>

    <!---SECTION--->
  <section class="content">
    <div class="header">
      <h1>Tutorial Pengolahan Data</h1>
    <div class="line"></div>
    </div>
    <div class="isi">
    <div class="accordion accordion-flush overflow-auto" id="accordionFlushExample">
        <div class="Pengolahan-data">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                PENGOLAHAN DATA
            </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
            <ol>
                <li>Data penyakit menular bersumber dari https://opendata.jabarprov.go.id/</li>
                <li>Ambil dataset penyakit menular ,yaitu Malaria, Tuberkulosis, dan HIV pada tahun 2021</li>
                    <ol>
                        <li>Malaria<br>		
                            https://opendata.jabarprov.go.id/id/dataset/jumlah-kasus-penyakit-malaria-berdasarkan-kabupatenkota-di-jawa-barat</li>
                        <li>Tuberkulosis<br>
                            https://opendata.jabarprov.go.id/id/dataset/jumlah-kasus-penyakit-tuberkulosis-berdasarkan-kabupatenkota-di-jawa-barat</li>
                        <li>HIV<br> 		
                            https://opendata.jabarprov.go.id/id/dataset/jumlah-kasus-hiv-berdasarkan-kabupatenkota-di-jawa-barat</li>
                        </ol>
                <li>Lalu, terdapat data pendukung sebagai gambaran jumlah tenaga kesehatan dan fasilitas pelayanan kesehatan pada tahun 2021</li>
                    <ol>
                        <li>Tenaga Kesehatan<br>
                            https://subangkab.bps.go.id/statictable/2022/09/12/292/jumlah-tenaga-kesehatan-menurut-kabupaten-kota-di-provinsi-jawa-barat-2021-.html</li>
                        <li>Fasilitas Pelayanan Kesehatan<br>
                            https://opendata.jabarprov.go.id/id/dataset/jumlah-fasilitas-kesehatan-berdasarkan-jenis-di-jawa-barat</li>
                    </ol>
                <li>Download dataset yang diperlukan dalam bentuk xls. dan lakukan proses data cleaning <br>
                Cleaning adalah Proses cleaning data atau pembersihan dilakukan terhadap data yang redudan atau ganda, inkonsisten, missing value dan outlier data.</li>
                <li>Setelah data yang dibutuhkan sudah tersedia, tahap selanjutnya proses visualisasi data</li>
            </ol>
            </div>
        </div>
        
        <div class="Visualisasi-data">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            PROSES VISUALISASI DATA
            </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
            <p>Visualisasi data dilakukan melalui tools https://lookerstudio.google.com/</p>
            <ol>
                <li>Membuat lembar kerja baru (blank report).</li>
                <li>Ganti nama lembar Project Day 1. </li>
                <li>Pilih New Page untuk menampilkan lembar lebih dari 1.</li>
                <li>Klik Add Data.</li>
                <li>Lalu, pilih add data yaitu menggunakan format file dari Google Sheet.</li>
                <li>Pilih file sesuai dengan data yang diambil.</li>
                <li>Pilih worksheet data yang akan diolah pada spreadsheet.</li>
                <li>Tambahkan worksheet yang dipilih.</li>
                <li>Pada bagian kanan tampilan terdapat menu DATA, klik worksheet yang telah ditambahkan.</li>
                <li>Lakukan edit data untuk mengubah tipe yang dibutuhkan (untuk mempermudah visualisasi).</li>
                <li>Pilih menu Add a chart pada bagian atas lembar kerja dan pilih Pivot Table.</li>
            </ol>
            <p>A. HALAMAN UTAMA</p>
            <p>Halaman Utama pada website menggunakan visualisasi data dalam bentuk grafik</p>
            <ol>
                <li>Setelah Table tersedia, pada item chart Row Dimention tambahkan atribut “id”, “nama_kabupaten_kota”.</li>
                <li>Pada item chart Metric tambahkan “jumlah_kasus_malaria”, “jumlah_kasus_TBC”, “Jumlah_kasus_HIV”, “jumlah_dokter”, “jumlah_RSU”, “jumlah_Puskesmas”.</li>
                <li>Salin link pada embed report dan masukkan pada source code html.</li>
            </ol>
            <p>B. HALAMAN KASUS</p>
            <p>Pada halaman kasus menggunakan visualisasi data dalam bentuk peta</p>
            <ol>
                <li>Setelah Table tersedia, pada item chart Row Dimention tambahkan atribut “nama_kabupaten_kota”.</li>
                <li>Pada item chart Metric tambahkan “jumlah_kasus_malaria” atau “jumlah_kasus_TBC” atau “Jumlah_kasus_HIV”.</li>
                <li>Salin link pada embed report dan masukkan pada source code html.</li>
            </ol>
        </div>
        </div>
        
        <div class="pembuatan-web">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                PEMBUATAN WEB
            </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                Website laporan penyakit menular Provinsi Jawa Barat akan berisi tampilan peta dan grafik yang memuat persebaran penyakit, 
                tenaga kesehatan, dan fasilitas pelayanan kesehatan berdasarkan kabupaten/kota Provinsi Jawa Barat. Pembuatan website memiliki 
                <ol>
                    <li>Menggunakan bahasa pemrograman server, PHP (Hypertext Preprocessor).</li>
                    <li>Menggunakan bahasa pemrograman client, HTML (Hypertext Markup Language) dan CSS(Cascading Stylesheet).</li>
                    <li>Tools yang digunakan xampp, vscode, web browser google chrome.</li>
                    <li>Referensi code (Youtube, Bootstrap, dan W3schools)</li>
                </ol>
            </div>
            </div>
        </div>
        </div>

    </div>        
    </div>
</section>
<section class="footer">
<p>&copy;Departemen Layanan Informasi Kesehatan | Mahasiswa Manajemen Informasi Kesehatan Tahun Angkatan 2021</p> 
</section>

   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
      