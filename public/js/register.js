// Untuk membuat password secara random
function generateRandomPass(length){
    const char = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    let password = "";

    for(let i = 0; i < length; i++){
        const randomIndex = Math.floor(Math.random() * char.length);
        password += char[randomIndex];
    }
    return password;
}
// Mengeksekusi kode ketika halaman telah dimuat atau dibuka
document.addEventListener("DOMContentLoaded", function(){
    if(document.getElementById("textPassword").textContent.trim() === ""){
        let password = generateRandomPass(6);
        document.getElementById("textPassword").textContent = password;
    }
    document.getElementById("signup").addEventListener("click", function(){
        var xhr = new XMLHttpRequest();
        var email = document.getElementById("textEmail").value;
        var nis = document.getElementById("textNis").value;
        var alamat = document.getElementById("textAlamat").value;
        var name = document.getElementById("textName").value;
        var notlp = document.getElementById("textNoTelp").value;
        var school = document.getElementById("textSchool").value;
        var pass = document.getElementById("textPassword").textContent.trim();
        // Digunakan untuk membangun string yang berisi data yang akan dikirim melalui permintaan HTTP (POST atau GET)
        var params = "email=" + email + "&nis=" + nis + "&alamat=" + alamat + "&nama=" + name + "&no_telp=" + notlp + "&sekolah=" + school + "&password=" + pass;

        // Untuk mengkonfigurasi permintaan HTTP sebelum dikirim
        // "POST" menentukan jenis metode yang digunakan adalah POST
        // "../php/connection-reg.php" adalah URL tujuan untuk melakukan permintaan HTTP
        // true digunakan untuk menentukan apakah permintaan akan dilakukan secara asinkron atau sinkron
        // true(asinkron) -> Kode JS akan terus dieksekusi tanpa menunggu respons dari server.
        // false(sinkron) -> Kode JS akan dihentikan sampai permintaan selesai dan respons diterima dan pengguna akan mengalami jeda.
        xhr.open("POST", "../php/connection-reg.php", true);
        // Mengatur header HTTP untuk permintaan untuk memberi tahu server bahwa data yang dikirimkan berformat x-www-form-urlencoded
        // x-www-form-urlencoded -> menunjukkan bahwa data yang dikirimkan akan berbentuk URL-encoded(Format standar untuk mengirim data formulir melalui permintaan HTTP)
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        // Menetapkan fungsi yang akan dipanggil setiap kali status kesiapan(readyState) objek XMLHttpRequest berubah
        // Untuk menangani data yang diterima saat permintaan selesai
        xhr.onreadystatechange = function(){
            // xhr.readyState == 4 -> Memeriksa apakah permintaan telah selesai dan semua respons dari server telah diterima
            // xhr.status == 200 -> Memeriksa apakah permintaan telah berhasil dilakukan dan server telah memberikan respons yang valid
            if(xhr.readyState == 4 && xhr.status == 200){
                if(xhr.responseText.trim() === "success"){
                    document.getElementById("textEmail").value = "";
                    document.getElementById("textNis").value = "";
                    document.getElementById("textAlamat").value = "";
                    document.getElementById("textName").value = "";
                    document.getElementById("textNoTelp").value = "";
                    document.getElementById("textSchool").value = "";
                    document.getElementById("textPassword").textContent = generateRandomPass(6);
                    password = document.getElementById("textPassword").textContent;
                    window.location.href = '/login';

                    // Redirect atau lakukan tindakan setelah login berhasil
                }else if(xhr.responseText.trim() === "null"){
                    alert("Silahkan lengkapi data terlebih dahulu untuk melakukan pendaftaran!");
                    // Tampilkan pesan kesalahan atau tindakan jika box kosong
                }else{{
                    alert("Error, Silahkan coba lagi nanti...");
                    // Tampilkan pesan kesalahan jika terjadi error kode
                }}
            }
        };
        xhr.send(params);
    });
});