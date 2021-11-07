function increment(input) {
    var curr_amount = null;
    var curr_amount_html = document.getElementById(input);
  
    if (sessionStorage[input]) {
      curr_amount = parseInt(sessionStorage.getItem(input));
    } else {
      curr_amount = parseInt(curr_amount_html.value);
    }
  
    curr_amount = parseInt(curr_amount) + 1;
    curr_amount_html.value = curr_amount.toString();
    sessionStorage.setItem(input, curr_amount);
  }
  
  function decrement(input) {
    var curr_amount = null;
    var curr_amount_html = document.getElementById(input);
  
    if (sessionStorage[input]) {
      curr_amount = parseInt(sessionStorage.getItem(input));
    } else {
      curr_amount = parseInt(curr_amount_html.value);
    }
  
    if (curr_amount > 1) {
      curr_amount = parseInt(curr_amount) - 1;
      curr_amount_html.value = curr_amount.toString();
      sessionStorage.setItem(input, curr_amount);
    }
  }
  
  function updateValues() {
    keys = Object.keys(sessionStorage);
    console.log(keys);
    for (i = 0; i < keys.length; i++) {
      if (sessionStorage.getItem(keys[i]) != null) {
        var temp = document.getElementById(keys[i]);
        if (temp) {
          var itemToUpdate = document.getElementById(keys[i]);
          itemToUpdate.value = sessionStorage.getItem(keys[i]).toString();
        }
      }
    }
  }
  function displayText() {
    var text = document.getElementById("description-text");
    if (text.style.display == "none") {
      text.style.display = "block";
    } else {
      text.style.display = "none";
    }
  }
  
  function getTotal(item) {
    var priceArray = document.getElementsByClassName("pricing");
    var rate = priceArray[0].innerHTML;
    rate = parseFloat(rate.slice(1, rate.indexOf("/")));
  
    var total = document.getElementById("totalPrice");
    var quantity = document.getElementById(item);
    if (quantity.value > 0) {
      total.innerHTML =
        "Sub-total: $" + ((quantity.value * rate * 100) / 100).toFixed(2);
    } else {
      total.innerHTML = "Sub-total: $0";
    }
  }
  
  function updateValue(input) {
    console.log(input);
    console.log(sessionStorage.getItem(input));
  
    if (sessionStorage.getItem(input) != null) {
      console.log(input);
      console.log(sessionStorage.getItem(input));
  
      var itemToUpdate = document.getElementById(input);
      itemToUpdate.value = sessionStorage.getItem(input).toString();
      getTotal(input);
    }
  }
  
  function displayText() {
    var text = document.getElementById("description-text");
    if (text.style.display == "none") {
      text.style.display = "block";
    } else {
      text.style.display = "none";
    }
  }
  
  function getTotal(item) {
    var priceArray = document.getElementsByClassName("pricing");
    var rate = priceArray[0].innerHTML;
    rate = parseFloat(rate.slice(1, rate.indexOf("/")));
  
    var total = document.getElementById("totalPrice");
    var quantity = document.getElementById(item);
    if (quantity.value > 0) {
      total.innerHTML =
        "Sub-total: $" + ((quantity.value * rate * 100) / 100).toFixed(2);
    } else {
      total.innerHTML = "Sub-total: $0";
    }
  }
  
  function updateValue(input) {
    console.log(input);
    console.log(sessionStorage.getItem(input));
  
    if (sessionStorage.getItem(input) != null) {
      console.log(input);
      console.log(sessionStorage.getItem(input));
  
      var itemToUpdate = document.getElementById(input);
      itemToUpdate.value = sessionStorage.getItem(input).toString();
      getTotal(input);
    }
  }
  
  function increment(input) {
    var curr_amount = null;
    var curr_amount_html = document.getElementById(input);
  
    if (sessionStorage[input]) {
      curr_amount = parseInt(sessionStorage.getItem(input));
    } else {
      curr_amount = parseInt(curr_amount_html.value);
    }
  
    curr_amount = parseInt(curr_amount) + 1;
    curr_amount_html.value = curr_amount.toString();
    sessionStorage.setItem(input, curr_amount);
  }
  
  function decrement(input) {
    var curr_amount = null;
    var curr_amount_html = document.getElementById(input);
  
    if (sessionStorage[input]) {
      curr_amount = parseInt(sessionStorage.getItem(input));
    } else {
      curr_amount = parseInt(curr_amount_html.value);
    }
  
    if (curr_amount > 1) {
      curr_amount = parseInt(curr_amount) - 1;
      curr_amount_html.value = curr_amount.toString();
      sessionStorage.setItem(input, curr_amount);
    }
  }
  
  function updateValues() {
    keys = Object.keys(sessionStorage);
    console.log(keys);
    for (i = 0; i < keys.length; i++) {
      if (sessionStorage.getItem(keys[i]) != null) {
        var temp = document.getElementById(keys[i]);
        if (temp) {
          var itemToUpdate = document.getElementById(keys[i]);
          itemToUpdate.value = sessionStorage.getItem(keys[i]).toString();
        }
      }
    }
  }
  