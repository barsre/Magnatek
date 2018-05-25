// JavaScript Document

// Ajax Product

function loadDoc(url, cFunction) {
    var xhttp;
    xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        cFunction(this);
        }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}

function ProductFunction(xhttp) {
    document.getElementById("frontpage").innerHTML =
    xhttp.responseText;
}

function SingleProductFunction(xhttp) {
    document.getElementById("product_right").innerHTML =
    xhttp.responseText;
    document.getElementById("product_right").style.background = "none";
}

