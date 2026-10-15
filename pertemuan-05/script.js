console.log("script.js berhasil dijalankan."); 
const navToggle = document.getElementById("navToggle");
const navMenu = document.getElementById("navMenu"); 
const contactForm = document.getElementById("contactForm");
const jenisPesan = document.querySelector('input[name="jenis_pesan"]:checked');
if (!jenisPesan) { 
// Proses validasi ketika jenis pesan belum dipilih. 
} 
const topikDipilih = document.querySelectorAll('input[name="minat"]:checked');
 if (topikDipilih.length === 0) { 
// Proses validasi ketika belum ada topik yang dipilih. 
} const namaInput = document.getElementById("nama"); 
const nama = namaInput.value; 
const emailInput = document.getElementById("email"); 
const semesterInput = document.getElementById("semester"); 
const email = emailInput.value; 
const semester = semesterInput.value; 
const formFeedback = document.getElementById("formFeedback");
const isOpen = navMenu.classList.toggle("nav-open"); 
addEventListener("click", () => { 
console.log("Tombol navigasi diklik."); 
}); 
() => { 
console.log("Tombol navigasi diklik."); 
}; 
contactForm.addEventListener("submit", (event) => { 
console.log("Form dikirim."); 
}); 
contactForm.addEventListener("input", () => { 
formFeedback.textContent = ""; 
});
contactForm.addEventListener("reset", () => { 
formFeedback.textContent = ""; 
});
contactForm.addEventListener("submit", (event) => { 
console.log(event); 
}); 
contactForm.addEventListener("submit", (event) => { 
event.preventDefault(); 
});
contactForm.addEventListener("submit", (event) => { 
event.preventDefault(); 
// Proses validasi formulir. 
}); 