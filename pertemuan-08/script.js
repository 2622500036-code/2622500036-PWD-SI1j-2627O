const btnMasuk = document.getElementById('btn-masuk');
const namaInput = document.getElementById('nama-input');
const welcomeModal = document.getElementById('welcome-modal');
const mainContent = document.getElementById('main-content');
const salamPengunjung = document.getElementById('salam-pengunjung');

btnMasuk.addEventListener('click', function() {
    const namaUser = namaInput.value.trim();
    
    if (namaUser !== "") {
        // Sembunyikan modal, tampilkan konten utama
        welcomeModal.style.display = 'none';
        mainContent.style.display = 'block';
        
        // Menampilkan nama pengunjung di dalam web
        salamPengunjung.textContent = "Halo, " + namaUser + "! Selamat datang di website saya.";
        
        // (Opsional) Simpan ke localStorage agar pengunjung tidak perlu isi ulang jika refresh
        localStorage.setItem('namaPengunjung', namaUser);
    } else {
        alert("Tolong Masukan Nama Anda Terlebih Dahulu Ya?");
    }
});