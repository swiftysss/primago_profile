// const { l } = require("vite/dist/node/types.d-aGj9QkWt");

//Untuk membuat efek scroll background-color pada navbar header
window.addEventListener("scroll", function() {
  const body = document.body;
  body.classList.toggle("scrolled", window.scrollY > 20);
});

var totalKelas = "0", totalSiswa = "0";

//Memuat data dan ditampilkan data saat halaman telah di muat/ditampilkan




//Membuat fungsi klik pada teks yang bercetak tebal biru pada Footer
function openLink(url){
  window.location.href = url;
}

//Membuat fungsi agar button Info P2DB (WhatsApp) agar bisa diklik
function waP2db(){
  // Membuka link tanpa harus membuka jendela baru
  window.location.href = "https://api.whatsapp.com/send?phone=6281325250554";
}