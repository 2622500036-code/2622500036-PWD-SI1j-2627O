E. Penyisipan JavaScript pada Dokumen HTML• tujuan penyiapan baseline P5; menyalin pwrtemuan 4 ke pertemuan-05 untuk di jadikan patokan java skrip.
• struktur berkas yang telah disiapkan; img ,poto-profil.jpg ,index.html ,style.css
• cara menjalankan halaman; index.html lalu klik kanan open in integrated browser.
• pemeriksaan yang dilakukan dan hasil aktualnya; hasil nya tampilan html , css serta gambar 
• masalah yang ditemukan beserta perbaikannya, jika ada. tidak ada masalah yang di temukan tampilam berhasil
menjalankan halaman nya ;ke file html pertemuan -05 masuk ke halaman.
pengujian nya; tag penutup </body> di index.html masukan code <script src="script.js"></script> kemudian ke file pertemuan -05 klik file script.js dan masukan kode console.log("script.js berhasil dijalankan."); 
hasil aktual; code ini ("script.js berhasil dijalankan."); berhasil masuk di (console) dan setelah saya hapus kode ini  ("script.js berhasil dijalankan.");  tidak muncul di (console).
galat tidak ada
F. Document Object Model (DOM)
menjalankan halaman masih sama tapi awalnya saya coba menjalannkan nya java script tidak mengetahuinya dan nilai nya null setelah itu di index.html saya perbarui saya tambahkan di bagian <ul> nya dengan ini <ul id navMenu> dan saya coba jalankan di concole dan bisa setelah itu saya coba masukin yg id=contactform nilainya null setelah saya masukin di elemen form bisa.
F.3. Memilih Elemen dengan querySelector()
perubahan munculnya di concole saat saya menjalankan document.querySelector('input[name="jenis_pesan"]:checked');nilai (saran) saat saya klik saran .
F.4. Memilih Beberapa Elemen dengan querySelectorAll() 
cara menjalankan halaman mengunakan live server langkah pengujian memasukan berkas skript.js(const topikDipilih = document.querySelectorAll('input[name="minat"]:checked');)dan(if (topikDipilih.length === 0) { 
// Proses validasi ketika belum ada topik yang dipilih. 
} ) setelah itu pilih topix yang diminati masuk ke concole kemudian ketik ini(document.querySelectorAll('input[name="minat"]:checked');) setelah itu muncul (NodeList(2) [input#minat-html, input#minat-css]
0
: 
input#minat-html
1
: 
input#minat-css
length
: 
2
[[Prototype]]
: 
NodeList)
F.5. Membaca Nilai Masukan dengan value 
uji berhasil kode bisa di baca dan diolah oleh java skript
G. Penanganan Peristiwa dengan Event Listener.
awalnya eror setelah saya hapus navTogle.  ahirnya bisa seteh saya klik muncul di console tombol navigasi diclik
G.4. Event submit.
hasil console muncul form dikirim setelah saya tekan kirirm
form berhasil di kirim

