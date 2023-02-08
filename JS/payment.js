$("input[name='expiry-data']").mask("00 / 00");

function myFunction() {
    var x = document.getElementById("pass");

    if (x.type === "text") {
        x.type = "text";
    } else {
        x.type = "text";
    }
}

function validate() {
    var text = document.getElementById("pass");
    var length = document.getElementById("length");

    if (text.value.length = 16) {
        alert("Payment Successful");
        window.location.replace("index.html");
        return false;
    } else {
        alert("payment Failed");
    }
}