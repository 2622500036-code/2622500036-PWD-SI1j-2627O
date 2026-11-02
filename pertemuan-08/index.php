<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS Maulana Firdaus</title>
  <link rel="stylesheet" href="index.css">

</head>

<body>
  <!-- bagian model -->
  <div id="welcome-modal" class="modal-overlay">
    <div class="modal-box">
      <h2>Selamat Datang!</h2>
      <p>silahkan masukkan nama kamu untuk masuk website:</p>
      <input type="text" id="nama-input" placeholder="nama kamu..." autocomplete="off">
      <button id="btn-masuk">Masuk Website</button>
    </div>

  </div>
  <!-- hilangkan web -->
  <div id="main-content" style="display: none;"></div>



  <header>
    <h1>--> MY STORY <-- </h1>
        <p id="salam-pengunjung"></p>
  </header>
  <!-- navigasi -->
  <div class="main-layout">
    <div class="menu">
      <nav>
        <a href="index.php">Story</a>
        <a href="Profil.php">Profil</a>
        <a href="Galeri.php">Gallery</a>
        <a href="contact.php">Kontak</a>

      </nav>
    </div>
    <main class="konten-utama">
      <section class="card">

        <h2>Selamat Datang!</h2>
        <p>halo semuanya, selamat datang di website saya! di sini saya akan membagikan beberapa gambar dan cerita
          menarik seputar: Profil Gallery & Kontak</p>

      </section>
      <section class="kartu-profil">
        <h3>Pesan Singkat :</h3>
        <p>Motivasi Tanpa Aksi Hanyalah Halusinasi</p>

      </section>
    </main>


  </div>
  <footer>
    <P>&copy;2622500036_Maulana Firdaus_SI1J_UTS Pemerogaman Web Dasar.</P>
  </footer>
  <script src="script.js"></script>

</body>

</html>