function myFunction() {
    var x = document.getElementById("pass");

    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function validate() {
    var password = document.getElementById("pass");
    var length = document.getElementById("length");

    if (password.value.length >= 8) {
        alert("Login Successful");
        window.location.replace("doctor.html");
        return false;
    } else {
        alert("Login Failed");
    }
}