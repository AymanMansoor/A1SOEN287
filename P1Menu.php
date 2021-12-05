<?php  session_start(); ?>

<!DOCTYPE html>
<html>
<!--Page one P1-->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Online Grocery ">
    <meta name="keywords" content="CSS, html, JS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Grocery</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<!--- Account display and Logout --->

<section class="container" style="border-bottom: 1px solid #000;"> 
<div class="navbar ">
 <div id="mySidenav" class="sidenav">
     
  <!---mobile screen menu-->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.html"  >Home</a>
  <a href="P4Cart.html">Cart</a>
  <a href="contact.html" >Contact</a>
  <a href="P5Logout.php"><i class="fa fa-user"></i><?php echo $_SESSION['Email']; ?></a>

</div> 
        <div class="mobile-nav"><span class="mobile" style="font-size:38px;cursor:pointer" onclick="openNav()">&#9776;</span></div>      
<div class="logo">   <a href="index.html"> <img src="img/original_logo.png"></a></div>

<!--big menu-->
    <div class="menu"><a href="P5Logout.php"><i class="fa fa-user"></i><?php echo $_SESSION['Email']; ?></a></div> 
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

    

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                
                <div style="margin-bottom: 35px;margin-top: -30px; text-align: center;" class="col-lg-12 col-md-12 col-sm-6">
                    <h2 ><i>Why Choose Foodmoji ?</i></h2><br/>
                    <div class="">
                        No more rushing to supermarkets and specialist grocers on a daily basis. Our items are vacuum-sealed, blast-frozen, and delivered straight to your door. You have everything you need at all times.
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-6">
                    <div class="banner__pic">
                        <img width="100%" src="img/off.png" alt="">
                    </div>
                </div>
<!--
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/juice.jpg" alt="">
                    </div>
                </div>
-->
            </div>
        </div>
    </div>
    <!-- Banner End -->
<!--
Montreal, QC
 emojifood@emojifood.com
 (514) 800-8001
 7869 Rue Tonty, Montreal QC, Y7A 9B8
-->
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
                        <ul>
                            <li><a href="ProductList.html">All Products</a></li>
                            <li><a href="order_list _P11.html">Order List</a></li>  
                            <li><a href="p9.html">User List</a></li>  
                        </ul>
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
    </footer>
    <!-- Footer Section End -->
             
    
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/myjs.js"></script>
</body>
</html>
