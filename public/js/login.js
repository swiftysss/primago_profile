// Fungsi untuk membuat cookie
function setCookie(cname, cvalue, exdays){
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expire = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expire + "; path=/";
}


document.addEventListener("DOMContentLoaded", function(){
    document.getElementById("login").addEventListener("click", function(){
        var xhr = new XMLHttpRequest();
        var email = document.getElementById("textEmail").value;
        var password = document.getElementById("textPassword").value;
        var params = "email=" + email + "&password=" + password;

        xhr.open("POST", "../php/connection.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
                if(xhr.responseText.trim().split(",")[0] === "success"){
                    // Membaca atau lakukan tindakan setelah login berhasil
                    document.getElementById("textEmail").value = "";
                    document.getElementById("textPassword").value = "";
                    setCookie("userLoggedIn", "true", 3);
                    setCookie("userID", xhr.responseText.trim().split(",")[1], 3);
                    window.location.href = '/p2db';
                }else if(xhr.responseText.trim() === "empty"){
                    alert("Akun Anda tidak terdaftar, silahkan daftar terlebih dahulu!");
                    // Tampilkan pesan kesalahan atau tindakan jika akun tidak tersedia
                }else{
                    alert("Silahkan lengkapi data terlebih dahulu untuk melakukan login!");
                    // Tampilkan pesan kesalahan atau tindakan jika box kosong
                }
            }
        };
        xhr.send(params);
    });
});