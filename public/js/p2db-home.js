// Fungsi untuk mendapatkan value cookie
function getCookie(cname){
    var name = cname + "=", decodedCookie = decodeURIComponent(document.cookie), ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++){
        var c = ca[i].trim();
        if(c.indexOf(name) == 0){
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
// Fungsi untuk membuat cookie
function setCookie(cname, cvalue, exdays){
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expire = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expire + "; path=/";
}

const idUser = getCookie("userID");
// const idUser = 1;

window.addEventListener("DOMContentLoaded", function(){
    var xhr = new XMLHttpRequest();
        var params = "id=" + idUser;

        xhr.open("POST", "../php/connection-home.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
                if(xhr.responseText.trim() === "null"){
                    alert("Ada data yang tidak lengkap");
                    // Tampilkan pesan kesalahan atau tindakan jika data kosong
                }else if(xhr.responseText.trim() === "empty"){
                    alert("Akun Anda tidak terdaftar, silahkan daftar dan konfirmasi ke Admin!");
                    // Tampilkan pesan kesalahan atau tindakan jika akun tidak tersedia
                }else{
                    document.getElementById("textName").textContent = xhr.responseText.trim()
                }
            }
        };
        xhr.send(params);
});

document.getElementById("logoutBtn").addEventListener("click", function(){
    document.getElementById("myModal").style.display = "block";

    document.getElementById("cancelBtn").onclick = function(){
        document.getElementById("myModal").style.display = "none";
    }
    document.getElementById("confirmBtn").onclick = function(){
        document.getElementById("myModal").style.display = "none";
        // Untuk menghapus data yang tersimpan di cookie
        setCookie("userLoggedIn", "", -1);
        setCookie("userPayment", "", -1);
        setCookie("userID", "", -1);
        window.location.reload();
    }
});
