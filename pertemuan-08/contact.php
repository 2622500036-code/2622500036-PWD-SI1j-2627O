<?php
// ===== PHP: proses form (di file yang sama) =====
$nama = $email = $pesan = "";
$error = "";
$sukses = false;

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
        $sukses = true;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak - Maulana Firdaus</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      max-width: 800px;
      margin: 0 auto;
      padding: 16px;
      color: #222;
    }
    nav ul {
      list-style: none;
      padding: 0;
      display: flex;
      gap: 16px;
      flex-wrap: wrap;
    }
    nav a { color: #4b0082; }
    form {
      display: grid;
      gap: 12px;
      max-width: 500px;
    }
    label { font-weight: bold; }
    input, textarea {
      width: 100%;
      padding: 8px;
      font: inherit;
      box-sizing: border-box;
      border: 1px solid #999;
      border-radius: 4px;
    }
    button {
      padding: 10px;
      font: inherit;
      background: #4b0082;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button:hover { background: #3a0066; }
    .pesan-status {
      margin: 0;
      padding: 10px;
      border-radius: 4px;
      display: none;
    }
    .pesan-status.sukses {
      display: block;
      background: #e6f4ea;
      color: #137333;
      border: 1px solid #137333;
    }
    .pesan-status.gagal {
      display: block;
      background: #fce8e6;
      color: #c5221f;
      border: 1px solid #c5221f;
    }
    iframe {
      width: 100%;
      height: 320px;
      border: 0;
    }
    footer {
      margin-top: 32px;
      border-top: 1px solid #ccc;
      padding-top: 8px;
    }
  </style>
</head>
<body>

  <header>
    <h1>Kontak Saya</h1>
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
        <a href="mailto:2622500036@mahasiswa.atmaluhur.ac.id">2622500036@mahasiswa.atmaluhur.ac.id</a></p>
      <p><strong>Instagram:</strong>
        <a href="https://instagram.com/xy_11_mau_lana" target="_blank" rel="noopener">xy_11_mau_lana</a></p>
      <p><strong>Github:</strong>
        <a href="https://github.com/USERNAME-KAMU" target="_blank" rel="noopener">Profil GitHub Lann</a></p>
      <p><strong>Jam Operasional:</strong> Senin - Jumat, 04.30 - 21.00 WIB</p>
      <p><strong>WhatsApp:</strong>
        <a href="https://wa.me/6283843607424" target="_blank" rel="noopener">083843607424</a></p>
    </section>

    <section>
      <h2>Kirim Pesan</h2>
      <form id="form-kontak" action="contact.php" method="post" novalidate>
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
          <p id="status" class="pesan-status sukses" role="status">Tervalidasi! Terima kasih, <?= htmlspecialchars($nama) ?>. Pesan kamu sudah diterima.</p>
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

  <script>
    const form = document.getElementById("form-kontak");
    const status = document.getElementById("status");

    form.addEventListener("submit", function (e) {
      const nama = form.nama.value.trim();
      const email = form.email.value.trim();
      const pesan = form.pesan.value.trim();
      const emailValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

      if (nama === "" || email === "" || pesan === "") {
        e.preventDefault();
        status.className = "pesan-status gagal";
        status.textContent = "Semua kolom wajib diisi.";
      } else if (!emailValid) {
        e.preventDefault();
        status.className = "pesan-status gagal";
        status.textContent = "Format email tidak valid.";
      }
      // Jika valid, form dikirim ke proses.php dan divalidasi lagi di server.
    });
  </script>
</body>
</html>