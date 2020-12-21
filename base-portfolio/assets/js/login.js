window.onload = function() {
    document.getElementById("loginBtn").onclick = function() {
        console.log("login clicked");
        window.location = "home_page.php";
    };
    document.getElementById("signUpBtn").onclick = function() {
        console.log("login clicked");
        window.location = "sign_up_page.php";
    };
}