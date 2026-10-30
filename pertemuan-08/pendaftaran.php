<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran - My Story</title>
    <link rel="stylesheet" href="style.css"><!-- Sesuaikan dengan CSS kamu -->
</head>
<body>

    <div style="width: 50%; margin: 40px auto; font-family: Arial, sans-serif;">
        <h2>Formulir Pendaftaran</h2>
        
        <!-- Arahkan action ke file proses.php -->
        <form action="proses.php" method="POST">
            <div style="margin-bottom: 15px;">
                <label>Nama Lengkap:</label><br>
                <input type="text" name="nama" required style="width: 100%; padding: 8px; margin-top: 5px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label>Email:</label><br>
                <input type="email" name="email" required style="width: 100%; padding: 8px; margin-top: 5px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label>Jenis Kelamin:</label><br>
                <input type="radio" name="gender" value="Laki-laki" required> Laki-laki
                <input type="radio" name="gender" value="Perempuan"> Perempuan
            </div>

            <div style="margin-bottom: 20px;">
                <label>Pilihan Hobi / Kegiatan:</label><br>
                <select name="hobi" style="width: 100%; padding: 8px; margin-top: 5px;">
                    <option value="Pemrograman Web">Pemrograman Web</option>
                    <option value="Desain Grafis">Desain Grafis</option>
                    <option value="Gaming & Teknologi">Gamingy & Teknologi</option>
                </select>
            </div>

            <button type="submit" name="submit" style="padding: 10px 20px; background: #20b2aa; color: white; border: none; cursor: pointer; border-radius: 4px;">Simpan Pendaftaran</button>
        </form>
        
        <p style="margin-top: 20px;"><a href="index.html">&larr; Kembali ke Beranda</a></p>
    </div>

</body>
</html>