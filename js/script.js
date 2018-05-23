// JavaScript Document

var Frontpage = document.getElementById("frontpage");
var Productpage = document.getElementById("product");
var ProductButton = document.getElementById("product_button");

function Open_product() {
    Frontpage.classList.add("nodisplay");
    Productpage.classList.remove("nodisplay");
    ProductButton.onclick = Close_product;
    ProductButton.innerHTML = "CLOSE PRODUCTS";
}

function Close_product() {
    Frontpage.classList.remove("nodisplay");
    Productpage.classList.add("nodisplay");
    ProductButton.onclick = Open_product;
    ProductButton.innerHTML = "SEE PRODUCTS";
}
