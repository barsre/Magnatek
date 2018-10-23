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

// Ajax for Frontpage
function ProductFunction(xhttp) {
    document.getElementById("frontpage").innerHTML =
    xhttp.responseText;
}

// Ajax Product More Info -Modem
function Open_ProductMore(xhttp) {
    document.getElementById("ProductMore").innerHTML =
    xhttp.responseText;
    document.getElementById("ProductMore").classList.remove("nodisplay");
}

function Close_ProductMore() {
  document.getElementById("ProductMore").classList.add("nodisplay");
}


