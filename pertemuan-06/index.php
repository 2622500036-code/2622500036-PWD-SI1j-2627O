<?php 
// P6: PHP dasar dan pemrograman sisi peladen 
// Bagian 1: Variabel dan konstanta 
$nim = "2622500036"; 
$namaMahasiswa = "Maulana Firdaus"; 
$programStudi = "SI"; 
$tahunAkademik = "2026/2027"; 
$semester = 2; 
$ipk = 3.75; 
$statusAktif = true; 
$catatanTambahan = null; 

// Deklarasi konstanta (D.2)
const NAMA_MATA_KULIAH = "Pemrograman Web Dasar";
const PROFIL_GITHUB = "maulana-firdaus";

// Bagian 2: Operator
$batasSemester = 8;
$sisaSemester = $batasSemester - $semester;
$semesterValid = ($semester >= 1) && ($semester <= $batasSemester);
$statusSemester = ($semesterValid && $statusAktif) ? "Sesuai rentang" : "Perlu diperiksa";
$semesterValid = ($semester >= 1) && ($semester <= $batasSemester);
$statusSemester = ($semesterValid && $statusAktif) ? "Sesuai rentang" : "Perlu diperiksa";


// Bagian 3: Percabangan if-elseif-else
if ($semester < 3) {
    $keteranganSemester = "Semester awal";
} elseif ($semester <= 6) {
    $keteranganSemester = "Semester menengah";
} else {
    $keteranganSemester = "Semester akhir";
}

$namaProdi = ($programStudi == "SI") ? "Sistem Informasi" : (($programStudi == "TI") ? "Teknik Informatika" : "Lainnya");

// Bagian 4: Percabangan switch-case-default
switch ($programStudi) {
    case "SI":
        $fokusProgramStudi = "Sistem informasi dan proses bisnis";
        break;
    case "TI":
        $fokusProgramStudi = "Komputasi dan pengembangan perangkat lunak";
        break;
    default:
        $fokusProgramStudi = "Belum ditentukan";
}
?> 
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    
    <header>
        <div class="header-top">
            <h1>Profil Mahasiswa</h1>

            <button class="nav-toggle" id="navToggle" type="button" aria-label="Buka navigasi" aria-controls="navMenu"
                aria-expanded="false">
                &#9776;
            </button>
        </div>
        <nav>
            <ul id="navMenu">
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h2>Selamat Datang</h2>
            <p>Halo, saya <strong><?php echo $namaMahasiswa; ?></strong>. Saya sedang mempelajari matakuliah 
            <strong><?php print NAMA_MATA_KULIAH; ?></strong> pada tahun akademik <?php echo $tahunAkademik; 
            ?>.</p> 
            
            <p>Halo,Saya Maulana Firdaus. Saya sedang mempelajari Pemerogaman Web Dasar</p>
            <img src="img/foto.jpg" height="180" width="190" alt="foto-profil">
        </section>
        <section id="about">
           <p>Halo, saya <strong><?php echo $namaMahasiswa; ?></strong>. Saya sedang mempelajari matakuliah <strong><?php print NAMA_MATA_KULIAH; ?></strong> pada tahun akademik <?php echo $tahunAkademik; ?>.</p>
            <article>
                <h3>Profil Singkat</h3>
                <p>Fokus program studi</p>
                <p>Semester: <?php echo $semester . " (" . $keteranganSemester . ")"; ?></p><p>Semester: <?php echo $semester . " (" . $keteranganSemester . ")"; ?></p>
                <p>Fokus program studi: <?php echo $fokusProgramStudi; ?></p>
                <p>Program Studi: <?php echo $namaProdi . " (" . $programStudi . ")"; ?></p>
                <p>Status mahasiswa: <?php echo $statusAktif ? "Aktif" : "Tidak aktif"; ?></p>
                <p>Sisa semester hingga batas: <?php echo $sisaSemester; ?></p>
                <p>Pemeriksaan rentang semester: <?php echo $statusSemester; ?></p>
                <p>Fokus program studi: <?php echo $fokusProgramStudi; ?></p> 
                <p>Saya mahasiswa Program Study Sistem Informasi</p>
                <h3>Target Belajar</h3>
                <ol>
                    <li>Mampu Menganalisis Data Secara Objektif</li>
                    <li>Mengolah Dan Memanfaatkan Basis Data</li>
                    <li>Menghubungkan Basis Dan Teknologi</li>
                </ol>
            </article>
        </section>
        <section id="contact">
            <h2>Kontak</h2>
            <P>Kunjungi <a target="_blank" href="https://github.com/2622500036-code<?= PROFIL_GITHUB ?>">profil GitHub
                    saya</a>.
            </P>
            <form id="contactForm" action="index.html" method="get" novalidate>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label><br>
                    <input class="input-form" type="texs" id="nama" name="nama" placeholder="Masukkan nama lengkap"
                        minlength="3" maxlength="50" required />
                </div>
                <div class="form-group">
                    <label for="email">Email</label><br>
                    <input class="input-from" type="email" id="email" name="email" placeholder="nama@email.com"
                        required />
                </div>
                <div class="form-group">
                    <label for="semester">Semester</label><br>
                    <input class="input-from" type="number" id="semester" name="semester" min="1" max="14" required />
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal Kunjungan</label><br>
                    <input class="input-form" type="date" id="tanggal" name="tanggal" required />
                </div>
                <div class="form-group">
                    <p>Jenis Pesan</p>
                    <input type="radio" id="pertanyaan" name="Jenis_pesan" value="pertanyaan" required />
                    <label for="pertanyaan">pertanyaan</label>
                    <input type="radio" id="saran" name="jenis_pesan" value="saran" />
                    <label for="saran">Saran</label>
                </div>
                <div class="form-group">
                    <p>Topik yang Diminati</p>
                    <input type="checkbox" id="minat-html" name="minat" value="HTML" />
                    <label for="minat-html">HTML</label>
                    <input type="checkbox" id="minat-css" name="minat" value="CSS" />
                    <label for="minat-css">CSS</label>
                </div>
                <div class="form-group">
                    <label for="prodi">Program Studi</label><br>
                    <select class="input-form" id="prodi" name="prodi" required>
                        <option value="">-- Pilih Program Studi --</option>>
                        <option value="SI">Sistem Informasi</option>
                        <option value="TI">Teknik Informatika</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan</label><br>
                    <textarea class="input-form" id="pesan" name="pesan" maxlength="300" placeholder="Tulis pesan anda"
                        required>
                    </textarea>
                </div>
                <button type="submit">Kirim</button>
                <button type="reset">Batal</button>
                <p id="formFeedback"></p>
            </form>
        </section>
    </main>
    <footer>
        <P>&copy; 2026 Maulana Firdaus [2622500036]</P>
    </footer>
    <script src="script.js"></script>
</body>

</html>