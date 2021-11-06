//Variables and constants
const decimal = 2;
const QST = 0.09975;
const GST = 0.05;
var totalProductInCart = document.getElementsByClassName("quantity"); console.log(totalProductInCart); //quantityForEachProduct = totalProductInCart[index].value

//Object for each product of P2
var productBeef = {name:"Beef", price:10.99}; console.log(productBeef);
var productTikka = {name:"Chicken Tikka", price:10.99}; console.log(productTikka);
var productChicken = {name:"Chicken", price:6.99}; console.log(productChicken);

//Array for each product object
var arrayOfProductObjectsInCart = new Array(productBeef, productTikka, productChicken); console.log(arrayOfProductObjectsInCart); //3D array | not including products not currently in P4 cart

function calculateTotalCost() {
    var tempPrice = 0;
    
    for (var index = 0; index < totalProductInCart.length; index++){
        var priceOfProduct = (totalProductInCart[index].value)*(arrayOfProductObjectsInCart[index].price);
        tempPrice += priceOfProduct;
        document.getElementById("temp-price-display").innerHTML = "$" + tempPrice.toFixed(decimal);
        document.getElementById("qst-price-display").innerHTML = "$" + (tempPrice*QST).toFixed(decimal);
        document.getElementById("gst-price-display").innerHTML = "$" + (tempPrice*GST).toFixed(decimal);
        document.getElementById("total-price-display").innerHTML = "$" + (tempPrice + tempPrice*QST + tempPrice*GST).toFixed(decimal);
    }
} 

//-----------------------------------------------------------------
/* ORIGINAL UPLOAD ON NOV 5TH, AT 5:50PM
function onClick(){
    var tempPrice = 0;

    function calculatePriceBeef() {
        var priceBeef = (totalProductInCart[0].value)*10.99;
        console.log(priceBeef);
        tempPrice += priceBeef;
        console.log(tempPrice);
        document.getElementById("temp-price-display").innerHTML = "$" + tempPrice;
        document.getElementById("qst-price-display").innerHTML = "$" + tempPrice*QST;
        document.getElementById("gst-price-display").innerHTML = "$" + tempPrice*GST;
        document.getElementById("total-price-display").innerHTML = "$" + (tempPrice + (tempPrice*QST) + (tempPrice*GST));
    }
    
    function calculatePriceTikka(){
        var priceTikka = (totalProductInCart[1].value)*10.99
        tempPrice += priceTikka;
        document.getElementById("temp-price-display").innerHTML = "$" + tempPrice;
        document.getElementById("qst-price-display").innerHTML = "$" + tempPrice*QST;
        document.getElementById("gst-price-display").innerHTML = "$" + tempPrice*GST;
        document.getElementById("total-price-display").innerHTML = "$" + (tempPrice + (tempPrice*QST) + (tempPrice*GST));
    }
    
    function calculatePriceChicken(){
        var priceChicken = (totalProductInCart[2].value)*6.99
        tempPrice += priceChicken; 
        document.getElementById("temp-price-display").innerHTML = "$" + tempPrice;
        document.getElementById("qst-price-display").innerHTML = "$" + tempPrice*QST;
        document.getElementById("gst-price-display").innerHTML = "$" + tempPrice*GST;
        document.getElementById("total-price-display").innerHTML = "$" + (tempPrice + (tempPrice*QST) + (tempPrice*GST));
    }

    calculatePriceBeef();
    calculatePriceTikka();
    calculatePriceChicken();
} */
