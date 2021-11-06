var quantityForEachProduct;
const QST = 0.09975;
const GST = 0.05;
var totalProductInCart = document.getElementsByClassName("quantity");
console.log(totalProductInCart);

function onClick(){
    var tempPrice = 0;

    function calculatePriceBeef() {
        var priceBeef = (totalProductInCart[0].value)*10.99
        console.log(priceBeef);
        tempPrice += priceBeef;
        console.log(tempPrice);
        document.getElementById("temp-price-display").innerHTML =  "$" + (tempPrice ).toFixed(2);
        document.getElementById("qst-price-display").innerHTML = "$" + (tempPrice*QST).toFixed(2);
        document.getElementById("gst-price-display").innerHTML = "$" + (tempPrice*GST).toFixed(2);
        document.getElementById("total-price-display").innerHTML = "$" + ((tempPrice + (tempPrice*QST) + (tempPrice*GST))).toFixed(2);
    }
    
    function calculatePriceTikka(){
        var priceTikka = (totalProductInCart[1].value)*10.99
        tempPrice += priceTikka;
        document.getElementById("temp-price-display").innerHTML = "$" + (tempPrice).toFixed(2);
        document.getElementById("qst-price-display").innerHTML = "$" + (tempPrice*QST).toFixed(2);
        document.getElementById("gst-price-display").innerHTML = "$" + (tempPrice*GST).toFixed(2);
        document.getElementById("total-price-display").innerHTML = "$" + ((tempPrice + (tempPrice*QST) + (tempPrice*GST))).toFixed(2);
    }
    
    function calculatePriceChicken(){
        var priceChicken = (totalProductInCart[2].value)*6.99
        tempPrice += priceChicken; 
        document.getElementById("temp-price-display").innerHTML = "$" + (tempPrice).toFixed(2);
        document.getElementById("qst-price-display").innerHTML ="$" + (tempPrice*QST).toFixed(2);
        document.getElementById("gst-price-display").innerHTML = "$" + (tempPrice*GST).toFixed(2);
        document.getElementById("total-price-display").innerHTML = "$" +((tempPrice + (tempPrice*QST) + (tempPrice*GST))).toFixed(2);
    }

    calculatePriceBeef();
    calculatePriceTikka();
    calculatePriceChicken();
}