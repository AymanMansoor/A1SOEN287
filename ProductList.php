<?php
session_start();
 ?>
<!DOCTYPE html>
<html>

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
  <div class="menu"><a href="P5/P5text.html"><i class="fa fa-user"></i> Login</a></div> 
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

<!--PAGE NAME-->
<div class="page-name">
    <div>
      <h3> All Products </h3> 
    </div>
</div>
<!--Page Name End-->

<!--Order List Section-->

<div style="overflow-x:auto;">
    <div class="product-list">
        <table class="table table-bordered bg-light">
            <tr class="Dark">
                <th scope="col" style="text-align: center;">Product Name</th>
                <th scope="col" style="text-align: center;">Product Number</th>
                <th scope="col" style="text-align: center;">Quantity</th>
                <th scope="col" style="text-align: center;">Price</th>
                <th scope="col" style="text-align: center;">Actions</th>
            </tr>
            <tbody>
     
<?php
include 'config.php';
$result = mysqli_query($con, "Select * From Product ");
if ($result)
{
    while ($row = mysqli_fetch_array($result)) 
    {
        $id = $row[0];
        echo "<tr style='text-align: center;'> ";
        echo "<td> $row[1] </td>";
        echo "<td> $row[0] </td>";
        echo "<td> $row[2] </td>";
        echo "<td> $. $row[3] </td>";
        echo "<td><a href='editAproduct.php?id=$row[0]' class='btn btn-success'>Edit ";     
        echo "<a href='editAproduct.php?id=$row[0]' class='btn btn-warning'> Delete </td>";
       
       echo "</tr>";
    }
}
?>
  

                </table>
                <span>
                    <a href="editAproduct.php" class="btn btn-success">Add</a>
                    <span class="btn btn-warning">Save</span>
                </span>
            </div>
</div>
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
