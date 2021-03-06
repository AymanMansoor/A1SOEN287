<?php 
session_start();
$message ="";
if($_SESSION['submitLogin']){
    if($_SESSION['wrongEmail']){
        $message = "The email you inputted does not exist";
        $_SESSION['wrongEmail'] = false;
    }
    if($_SESSION['wrongPassword']){
        $message = "The password you inputted is wrong";
        $_SESSION['wrongPassword'] = false;
    }
    $_SESSION['submitLogin'] = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<!---Doc info-->
<head>
    <title> P5(Sign-in page) by: 40191897 </title>
    
    <!--BootStrap-->
    <meta charset="UTF-8">
    <meta name="description" content="Online Grocery ">
    <meta name="keywords" content="CSS, html, JS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <!---Our CSS file-->
    <link rel="stylesheet" type="text/css" href="P5styles.css"/>
    <style> .error {color:#FF0000; text-align:center; font-size:18px;} </style>
</head>

<!---Body for the sign-up info-->
<body>

</header>
<section class="container" style="border-bottom: 1px solid #000;"> 
<div class="navbar ">
<div id="mySidenav" class="sidenav">
<!---mobile screen menu-->
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href="index.html"  >Home</a>
<a href="P4Cart.html">Cart</a>
<a href="contact.html" >Contact</a>
<a href="P5text.html"><i class="fa fa-user"></i><?php echo $_SESSION['Email']; ?></a>

</div> 

      <div class="mobile-nav"><span class="mobile" style="font-size:38px;cursor:pointer" onclick="openNav()">&#9776;</span></div>      
<div class="logo">   <a href="index.html"> <img src="img/original_logo.png"></a></div>

<!--big menu-->
  <div class="menu"><a href="P5text.html"><i class="fa fa-user"></i><?php echo $_SESSION['Email']; ?></a></div> 
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

<div class="error"><?php echo $message; ?></div>
<div class="container-2">
    <form action="P5Signingin.php" method="post" class="email-pass" id="login-form">
        <div class="page-header">
            <b><h3>Already have an account? Sign in</h3></b>
        </div>
    
        <div class="box2">    
            <input type="text" name="email" class="form-control" id="eml" placeholder="Email" type="email" class="eml" size="40" required>
            <input type="text" name="pswrd" class="form-control" id="pswrd" placeholder="Password" size="40" required>
        </div>
    
        <div class="remember-login">
            <label class="rmbr"> 
                <input type="checkbox" name="remember" checked="checked"/>Remember me
            </label>
       
            <button type="submit" class="button" value="Submit Form" name="login-btn">LOG IN</button>
        </div>
    
        <div class="forgot-pass-link">
            <a href="" class="idk">Forgot your password?</a> 
        </div> 
        
        <hr style="width:80%">
    
        <div class="box3">
            <b><h2>Don't have an account?</h2></b>
            <a href="P6text.html" id="sun" class="form-control">SIGN UP NOW</a>
        </div>
    </form>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="footer__about">
                    <h6>Address </h6>
                    <ul>
                        <li>Canada -Monterial </li>
                        <li>Phone:(+514 568-4823) </li>
                        <li>Email:ahmadabd2000ul@gmail.com </li>
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
              Copyright &copy;2021  by Group name        
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->
</html>
