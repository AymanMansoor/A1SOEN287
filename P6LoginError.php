<?php 
session_start(); 
$_SESSION['submitted'];
$message = "";
if($_SESSION['submitted']){
    if($_SESSION['nameErr']){
        $message = "This person already exists ";
        $_SESSION['nameErr'] = false;
    }
    if($_SESSION['emailErr']){
        $message = "This email is already in use ";
        $_SESSION['emailErr'] = false;
    }
    if($_SESSION['passwordErr']){ //bc its a session, it remembers that previously this was true
        $message = "This password is taken ";
        $_SESSION['passwordErr'] = false;
    }
    if($_SESSION['pasmatchErr']){
        $message = "The passwords inputted do not match ";
        $_SESSION['pasmatchErr'] = false;
    }
    $_SESSION['submitted'] = false;
}
?>

<!DOCTYPE html>
<html>
<head>
<head>
    <title>P6(Sign Up Page) by: 40191897</title>
    
    <!---Bootstrap-->
    <meta charset="UTF-8">
    <meta name="description" content="Online Grocery ">
    <meta name="keywords" content="CSS, html, JS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- CSS Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style> .error {color:#FF0000; text-allign:center; font-size:20px; } </style>

    <!--Our CSS file-->
    <link rel="stylesheet" type="text/css" href="P6styles.css"/>
</head>

<body>
</header>
<section class="container" style="border-bottom: 1px solid #000;"> 
<div class="navbar ">
<div id="mySidenav" class="sidenav">
<!--     mobile screen menu-->
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href="index.html"  >Home</a>
<a href="P4Cart.html">Cart</a>
<a href="contact.html" >Contact</a>
<a href="P5text.html"><i class="fa fa-user"></i> Login</a>

</div> 

      <div class="mobile-nav"><span class="mobile" style="font-size:38px;cursor:pointer" onclick="openNav()">&#9776;</span></div>      
<div class="logo">   <a href="index.html"> <img src="img/original_logo.png"></a></div>

<!--big menu-->
  <div class="menu"><a href="P5text.html"><i class="fa fa-user"></i> Login</a></div> 
  <div class="menu"><a href="contact.html" >Contact</a></div> 
  <div class="menu"> <a href="P4Cart.html">Cart</a></div> 
  
   <div class="menu"><a href="index.html">Home</a></div>
  

</div>   
    </section> 
  <!-- Header Section End -->
   <!-- Side Section Begin -->
  <section class="hero">
      <div class="container">
          <div class="row">
              <div class="col-lg-3">
                  <div class="hero__categories">
                      <div class="hero__categories__all">
                          <span>Categories</span>
                      </div>
                      <ul>
                          <li><a href="meat.html"> Meat & Poultry</a></li>
                          <li><a href="frozen-food.html">Frozen Foods</a></li>
                          <li><a href="Fruits&Vegetables.html">Fruits & Vegetables</a></li>
                          <li><a href="Bread&Bakery.html"> Bread & Bakery</a></li>
                          <li><a href="Dairy&Eggs.html">Dairy & Eggs</a></li>
                          <li><a href="desserts.html">Dessert Foods</a></li>
                          <li><a href="beverage.html">Beverages</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-9">    
                  <div class="hero__item" >                           
<!--                      <img src= "img/fruit.png" width = 80% height = 80% />-->
                        <img src= "img/welcome.jpg" width = 80% height = 80% />
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Side Section End -->
	
<div class="flexboxParent">
<div class="error"><?php echo $message; ?></div>
<div class="form-control" id="maintitle"><b><h4>Sign Up</h4></b></div>

<!--The form to fill out-->
<form action="P6Signingup.php" method="POST" class="formbox">
    <div class="box-1"> <!---Names input-->
        <input type="text" class="form-control" id="FNtext" placeholder="First name*" required>
        <input type="text" class="form-control" id="LNtext" placeholder="Last name*" required>
        <div class=container1><h5>*Mandatory field</h5></div>
        <hr style="width:94%">
    </div>

    <div class="box-2"> <!--Email and Password field-->
        <input type="text" class="form-control" id="email" type="email" name="Email" placeholder="Email*" size="40" required>
        <input type="text" class="form-control" id="password" type="password" name="Password" placeholder="Password*" size="40" required>
        <input type="text" class="form-control" id="confpswrd" type="password" name="ConfirmPassword" placeholder="Confirm Password*" required>
    </div>

    <div class="box-3"> <!--Address signup-->
        <input type="text" class="form-control" id="input-address-first" type="address" name="address" placeholder="Address Number" required>
        <input type="text" class="form-control" id="input-address" placeholder="City" required>
        <input type="text" class="form-control" id="input-address" placeholder="Province/State" required>
        <input type="text" class="form-control" id="input-address" placeholder="Country" required>
        <input type="text" class="form-control" id="input-address-last" placeholder="Postal Code" required>
    </div>

    <div class="container2">
        <div class="box-2-3"> <!---Newsletter-->
            <h5>Would you like to sign up for our newsletter?</h5>
        </div>
        <div class="box-check-3"> <!--Confirm newsletter-->
            <label class="newscheckbx"><input type="checkbox" checked="checked" class="chbox1">I want to recieve recipe ideas, special offers and promotions, and information on our products and services</label>
        </div>
    </div>

    <hr style="width:94%"> <!--Line to seperate-->

    <div class="container3"> <!---2nd text container-->
        <h5>Consent to conditions of Use and Protection</h5>
        <label class="newscheckbx"><input type="checkbox" checked="checked" class="chbox2">I accept and have read the <span style="color:tomato;font-weight:bold">Conditions of Use and Protection of Personal Information Policy</span></label>
    </div>
   
    <button type="submit" class="create" value="Submit Form" name="create-acc-btn">CREATE ACCOUNT</button> <!--Submit Account Button-->
    <button type="reset" class="reset" value="Reset Form" name="reset-acc-btn">CLEAR FORM</button>
    
    <div class="AHAtext"> <!--Already Have an Account Link-->
        <h5>Already have an account? <a href="P5text.html" class="SIbutton"><span style="text-decoration:underline";>Sign in</span></a></h5>
    </div>    
</form>
</div>

  
</body>

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="footer__about">
                    <h6>Contact us </h6>
                    <ul>
                        <li>Montreal, QC</li>
                        <li>Phone:(514) 800-8001 </li>
                        <li>Email:info@foodmoji.com </li>
                        <li>7869 Rue Tonty, Montreal QC, Y7A 9B8</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="footer__widget">
                    <h6>Join US</h6>
                    <div class="footer__widget__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>                  
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text">
              Copyright &copy;2021  by Foodmoji       
                </div>
            </div>
        </div>
        </div></div>
</footer> <!-- Footer Section End -->
</html>
