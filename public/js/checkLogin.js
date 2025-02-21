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

// Untuk mendapatkan cookie apakah user sudah login atau belum
var isLogin = getCookie("userLoggedIn");
var isPayment = getCookie("userPayment");
if(isLogin === "true"){
    if(window.location.pathname === "/login"){
        window.location.href = "/p2db";
    }
}else{
    if(window.location.pathname === "/login"){
        
    }else{
        window.location.href = "/login";
    }
}