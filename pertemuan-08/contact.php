<?php
// ===== PHP: proses form (di file yang sama) =====
$nama = $email = $pesan = "";
$error = "";

$sukses = isset($_GET["sukses"]);
if ($sukses) { $nama = $_GET["nama"] ?? ""; }

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama  = trim($_POST["nama"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $pesan = trim($_POST["pesan"] ?? "");

    if ($nama === "" || $email === "" || $pesan === "") {
        $error = "Semua kolom wajib diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Format email tidak valid.";
    } else {
        $baris = date("Y-m-d H:i:s") . " | " . $nama . " | " . $email . " | " .
                 str_replace(["\r", "\n"], " ", $pesan) . PHP_EOL;
        file_put_contents("pesan.txt", $baris, FILE_APPEND | LOCK_EX);

        header("Location: contact.php?sukses=1&nama=" . urlencode($nama) . "#form-kontak");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak - Maulana Firdaus</title>
  <link rel="stylesheet" href="contact.css">
</head>

<body>
<div id="hasilPesan" style="display: none;">
    <h3>Pesan Berhasil Dikirim!</h3>
    <p><b>Nama:</b> <span id="hasilNama"></span></p>
    <p><b>Email:</b> <span id="hasilEmail"></span></p>
    <p><b>Pesan:</b> <span id="hasilIsi"></span></p>
</div>

  <!-- ===== Modal selamat datang ===== -->
  <div id="welcome-modal" class="modal">
    <div class="modal-box">
      <h2>Selamat Datang</h2>
      <p>Siapa nama kamu?</p>
      <input type="text" id="nama-input" placeholder="Masukkan nama kamu">
      <button id="btn-masuk" type="button">Masuk</button>
    </div>
  </div>

  <!-- ===== Konten utama (tersembunyi sampai nama diisi) ===== -->
  <div id="main-content" style="display:none;">

    <header>
      <h1>Kontak Saya</h1>
      <p id="salam-pengunjung" class="salam"></p>
      <nav>
        <ul>
          <li><a href="story.php">My Story</a></li>
          <li><a href="profil.php">My Profil</a></li>
          <li><a href="gallery.php">My Gallery</a></li>
          <li><a href="contact.php">My Kontak</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <section>
        <h2>Hubungi &amp; Info Lebih Lanjut</h2>
        <p>Berikut adalah beberapa informasi kontak dan detail tambahan tentang saya:</p>

        <p><strong>Email:</strong>
          <a href="mailto:2622500036@mahasiswa.atmaluhur.ac.id">2622500036@mahasiswa.atmaluhur.ac.id</a>
        </p>
        <p><strong>Instagram:</strong>
          <a href="https://instagram.com/xy_11_mau_lana" target="_blank" rel="noopener">xy_11_mau_lana</a>
        </p>
        <p><strong>Github:</strong>
          <a href="https://github.com/USERNAME-KAMU" target="_blank" rel="noopener">Profil GitHub Lann</a>
        </p>
        <p><strong>Jam Operasional:</strong> Senin - Jumat, 04.30 - 21.00 WIB</p>
        <p><strong>WhatsApp:</strong>
          <a href="https://wa.me/6283843607424" target="_blank" rel="noopener">083843607424</a>
        </p>
      </section>

      <section>
        <h2>Kirim Pesan</h2>
        <form id="form-kontak" action="contact.php#form-kontak" method="post" novalidate>
          <div>
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Nama lengkap" value="<?= $sukses ? '' : htmlspecialchars($nama) ?>" required>
          </div>
          <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="nama@email.com" value="<?= $sukses ? '' : htmlspecialchars($email) ?>" required>
          </div>
          <div>
            <label for="pesan">Pesan</label>
            <textarea id="pesan" name="pesan" rows="5" placeholder="Tulis pesan kamu di sini..." required><?= $sukses ? '' : htmlspecialchars($pesan) ?></textarea>
          </div>
          <button type="submit">Kirim Pesan</button>
          <?php if ($sukses): ?>
            <p id="status" class="pesan-status sukses" role="status">✅ Pendaftaran berhasil! Terima kasih, <?= htmlspecialchars($nama) ?>. Data kamu sudah kami terima.</p>
          <?php elseif ($error !== ""): ?>
            <p id="status" class="pesan-status gagal" role="status"><?= htmlspecialchars($error) ?></p>
          <?php else: ?>
            <p id="status" class="pesan-status" role="status"></p>
          <?php endif; ?>
        </form>
      </section>

      <section>
        <h2>Lokasi</h2>
        <address>
          Universitas Atma Luhur<br>
          Jl. Jend. Sudirman, Selindung, Pangkalpinang<br>
          Kepulauan Bangka Belitung, Indonesia
        </address>
        <iframe
          title="Peta lokasi Universitas Atma Luhur"
          src="https://maps.google.com/maps?q=Universitas%20Atma%20Luhur%20Pangkalpinang&amp;output=embed"
          loading="lazy"
          allowfullscreen>
        </iframe>
      </section>
    </main>

    <footer>
      <p>&copy; 2622500036_Maulana Firdaus_SI1J_UTS Pemrograman Web Dasar.</p>
    </footer>

  </div>

  <script>
    // ===== Modal selamat datang =====
    const btnMasuk = document.getElementById("btn-masuk");
    const namaInput = document.getElementById("nama-input");
    const welcomeModal = document.getElementById("welcome-modal");
    const mainContent = document.getElementById("main-content");
    const salamPengunjung = document.getElementById("salam-pengunjung");

    function tampilkanKonten(nama) {
      welcomeModal.style.display = "none";
      mainContent.style.display = "block";
      salamPengunjung.textContent = "Halo, " + nama + "! Selamat datang di website saya.";
    }

    // Kalau pengunjung sudah pernah isi nama, langsung tampilkan konten
    let tersimpan = null;
    try { tersimpan = localStorage.getItem("namaPengunjung"); } catch (e) {}
    if (tersimpan) tampilkanKonten(tersimpan);

    function masuk() {
      const namaUser = namaInput.value.trim();
      if (namaUser !== "") {
        try { localStorage.setItem("namaPengunjung", namaUser); } catch (e) {}
        tampilkanKonten(namaUser);
      } else {
        alert("Tolong masukkan nama kamu terlebih dahulu ya.");
      }
    }

    btnMasuk.addEventListener("click", masuk);
    namaInput.addEventListener("keydown", function (e) {
      if (e.key === "Enter") masuk();
    });

    // ===== Form kirim pesan =====
    const form = document.getElementById("form-kontak");
    const statusEl = document.getElementById("status");

    // Pesan sukses hilang otomatis setelah 5 detik
    if (statusEl.classList.contains("sukses")) {
      setTimeout(function () {
        statusEl.className = "pesan-status";
        statusEl.textContent = "";
      }, 5000);
    }

    form.addEventListener("submit", function (e) {
      const nama = form.nama.value.trim();
      const email = form.email.value.trim();
      const pesan = form.pesan.value.trim();
      const emailValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

      if (nama === "" || email === "" || pesan === "") {
        e.preventDefault();
        statusEl.className = "pesan-status gagal";
        statusEl.textContent = "Semua kolom wajib diisi.";
      } else if (!emailValid) {
        e.preventDefault();
        statusEl.className = "pesan-status gagal";
        statusEl.textContent = "Format email tidak valid.";
      }
      // Jika valid, form dikirim ke server dan divalidasi lagi oleh PHP.
    });
  </script>
</body>

</html>