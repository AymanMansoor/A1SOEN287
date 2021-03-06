<?php session_start() //added this?>

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
   <!--JavaScript-->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
    <link rel="stylesheet" href="css/p11.css" type="text/css">   
    
</header>

<section class="container" style="border-bottom: 1px solid #000;"> 
    <div class="navbar ">
     <div id="mySidenav" class="sidenav">
    <!--     mobile screen menu-->
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="P1Menu.php"  >Home</a>
      <a href="P4Cart.html">Cart</a>
      <a href="contact.html" >Contact</a>
         <a href="P5Logout.php"><i class="fa fa-user"></i><?php echo $_SESSION['Email']; //added this?></a>
    
    </div> 
    
            <div class="mobile-nav"><span class="mobile" style="font-size:38px;cursor:pointer" onclick="openNav()">&#9776;</span></div>      
    <div class="logo">   <a href="index.html"> <img src="img/original_logo.png"></a></div>
    
    <!--big menu-->
        <div class="menu"><a href="P5Logout.php"><i class="fa fa-user"></i><?php echo $_SESSION['Email']; //added this?></a></div> 
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
    
        <!--Page Name Begin -->
    <div class="page-name">
      <p>
        <div style="text-align: center;">
        <h3>Order List</h3> 
      </p>
      </div>
    </div>
    <!--Page Name End-->
    <!--User List section begin-->
 <section class="backstore-9">
    <div>
      <form action="/action_page.php">
        <div style="text-align: Left;">
            <div>
      <table id="table">
      <thead>
        <tr>
            <th scope="col" style="text-align: center;">User Name</th>
            <th scope="col" style="text-align: center;">Order Number</th>
            <th scope="col" style="text-align: center;">Order List</th>
            <th scope="col" style="text-align: center;">Price</th>
            <th scope="col" style="text-align: center;">Actions</th>
        </tr>
    </thead>
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
            <a href = "edit_order_list P12.html"  class="btn btn-secondary">Edit </a>
            <input type="button" value="Delete" class="btn btn-info" onclick="deleteRow(this)">  
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
            <a href = "edit_order_list P12.html"  class="btn btn-secondary">Edit </a>
            <input type="button" value="Delete" class="btn btn-info" onclick="deleteRow(this)">  
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
            <a href = "edit_order_list P12.html"  class="btn btn-secondary">Edit </a>
            <input type="button" value="Delete" class="btn btn-info" onclick="deleteRow(this)">  
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
            <a href = "edit_order_list P12.html"  class="btn btn-secondary">Edit </a>
            <input type="button" value="Delete" class="btn btn-info" onclick="deleteRow(this)">  
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
            <a href = "edit_order_list P12.html"  class="btn btn-secondary">Edit </a>
            <input type="button" value="Delete" class="btn btn-info" onclick="deleteRow(this)">  
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
            <a href = "edit_order_list P12.html"  class="btn btn-secondary">Edit </a>
            <input type="button" value="Delete" class="btn btn-info" onclick="deleteRow(this)">  
            </td>  
    </tr>
      </tbody>
    </table>

        <div class="modal-footer">
           <a href = "edit_order_list P12.html" class="btn btn-outline-primary" style="float: left;">Add a new order</button></a>
    </div>
    </section>
    <!--User List section end-->
    
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
                        <ul><!--added this-->
                            <li><a href="ProductList.html">All Products</a></li>
                            <li><a href="order_list_P11.php">Order List</a></li>  
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
<script src="js/delete.js"></script>

</body>
</html>
