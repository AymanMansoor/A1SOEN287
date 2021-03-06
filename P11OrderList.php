<?php session_start(); ?>
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
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

  <section class="container" style="border-bottom: 1px solid #000;"> 
<div class="navbar ">
 <div id="mySidenav" class="sidenav">
<!--     mobile screen menu-->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="P1Menu.php"  >Home</a>
  <a href="P4Cart.html">Cart</a>
  <a href="contact.html" >Contact</a>
  <a href="P5Logout.php"><i class="fa fa-user"></i><?php echo $_SESSION['Email']; ?></a>

</div> 

        <div class="mobile-nav"><span class="mobile" style="font-size:38px;cursor:pointer" onclick="openNav()">&#9776;</span></div>      
<div class="logo">   <a href="index.html"> <img src="img/original_logo.png"></a></div>

<!--big menu-->
    <div class="menu"><a href="P5Logout.php"><i class="fa fa-user"></i> <?php echo $_SESSION['Email']; ?></a></div> 
    <div class="menu"><a href="contact.html" >Contact</a></div> 
    <div class="menu"> <a href="P4Cart.html">Cart</a></div> 
    
     <div class="menu"><a href="P1Menu.php">Home</a></div>
    

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
                            <li><a href="frozen-food.html">Frozen Food</a></li>
                            <li><a href="#">Fruit</a></li>
                            <li><a href="#"> Berries</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Dairy</a></li>
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

    <!--Page Name Begin -->
<div class="page-name">
  <p>
    <div style="text-align: center;">
    <h3>Order List</h3> 
  </p>
  </div>
</div>
<!--Page Name End-->

  <!--Order list section Begin-->
<section class="backstore-9">
  <div style="overflow-x:auto;">
    <div class="order-list">
        <table class="table table-bordered bg-light">
            <tr class="Dark">
                <th scope="col" style="text-align: center;">User Name</th>
                <th scope="col" style="text-align: center;">Order Number</th>
                <th scope="col" style="text-align: center;">Order List</th>
                <th scope="col" style="text-align: center;">Price</th>
                <th scope="col" style="text-align: center;">Actions</th>
            </tr>
            <tbody>
                <tr style="text-align: center;">
                    <td>Luis Pierre</td>
                    <td>097653</td>
                    <td>
                        <h6>CQUEBON Milk</h6>
                        <h6>Campar tomatoes</h6>
                        <h6>White eggs(XL)</h6>
                    </td>
                    <td>
                        <h6> 12.06$ </h6>
                    </td>
                    <td>
                            <a href="#" class="btn btn-secondary">Edit</a>
                            <div class="btn btn-info">Delete</div>
                            </div>
                    </td>
  
                </tr>
                <tr style="text-align: center;">
                    <td>Tokyo Kevin</td>
                    <td>086437</td>
                    <td>
                        <h6>Blackberry</h6>
                        <h6>Vanilla Yogurt</h6>
                        <h6>Cinnamon Rolls</h6>
                        <h6>Water Bottle</h6>
                        
                    </td>
                    <td>
                        <h6> 27.4$ </h6>
                    </td>
                    <td>
                        <a href="#" class="btn btn-secondary">Edit</a>
                        <div class="btn btn-info">Delete</div>
                        </div>
                    </td>
  
                </tr>
                <tr style="text-align: center;">
                  <td>Cayla Justin</td>
                  <td>12331</td>
                  <td>
                      <h6>Oreo </h6>
                      <h6>Essex Kent Mushroom</h6>
                      <h6>Brioche</h6>
                      <h6>White Bread</h6>
                      <h6>Green Apples</h6>
                  </td>
                  <td>
                      <h6> 31.11$ </h6>
                  </td>
                  <td>
                      <a href="#" class="btn btn-secondary">Edit</a>
                      <div class="btn btn-info">Delete</div>
                      </div>
                  </td>
  
              </tr>
                <tr style="text-align: center;">
                    <td>Talin Patel</td>
                    <td>121345</td>
                    <td>
                        <h6>Cream Cheese</h6>
                        <h6>White Eggs(XL) </h6>
                        <h6> Beef </h6>
                    </td>
                    <td>
                        <h6> 20.67$ </h6>
                    </td>
                    <td>
                        <a href="#" class="btn btn-secondary">Edit</a>
                        <div class="btn btn-info">Delete</div>
                        </div>
                    </td>
  
                </tr>
                <tr style="text-align: center;">
                    <td>Marian Kandalaft</td>
                    <td>987522</td>
                    <td>
                        <h6>2x Popsicle </h6>
                        <h6>Chocolate Chip Cookie Dough Ice Cream</h6>
                        <h6>Marble Cake</h6>
                        <h6>3x RedBull </h6>
                        <h6>Chicken Griller</h6>
                    </td>
                    <td>
                        <h6> 57.88$ </h6>
                    </td>
                    <td>
                        <a href="#" class="btn btn-secondary">Edit</a>
                        <div class="btn btn-info">Delete</div>
                        </div>
                    </td>
  
                </tr>
                <tr style="text-align: center;">
                 <td>Myriam White</td>
                  <td>234233</td>
                  <td>
                      <h6>BlackBerry</h6>
                      <h6>Apple Juice</h6>
                      <h6>Water bottle</h6>
                      <h6>Tomatoes</h6>
                      <h6>white Bread</h6>
                      <h6>4x coca-cola</h6>
                      <h6>Thin Sliced Whole Wheat</h6>
                      <h6>Mushroom</h6>
                  </td>
                  <td>
                      <h6> 40.76$ </h6>
                  </td>
                  <td>
                      <a href="#" class="btn btn-secondary">Edit</a>
                      <div class="btn btn-info">Delete</div>
                      </div>
                  </td>
  
              </tr>
                </table>
            <span>
                <span class="btn btn-secondary">Add </span>
                <span class="btn btn-info">Save</span>
            </span>
  </div>
  </section>
 <!--Order list section End-->

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
    </footer>
    <!-- Footer Section End -->
             
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/myjs.js"></script>
</body>
</html>
