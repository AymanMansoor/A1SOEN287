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
    <!--Page Name Begin -->
    <div class="page-name">
        <p>
          <div style="text-align: left;">
          <h3>Product Modification</h3> 
        </p>
        </div>
      </div>
      <!--Page Name End-->
      
      <!--Order modification section Begin-->
      <p>Use this form to provide us with your product preferences and changes. </p>
      <section class="backstore-12">
        <div style="text-align: center;">
        <form action ="" method ="post" enctype="multipart/form-data"> 
            <div>
                <h6 class="text-muted mt-4">
                    Category type</h6>
                   
                    <?php 
                    include "config.php";
                   $result = mysqli_query($con, "SELECT * FROM Category") 
                     or die(mysql_error());
                  echo "<td> <select name ='CatID'>";
                    while($row = mysqli_fetch_array($result))
                     {
                   echo "<option value='".$row["CatID"]."'  >".$row["Description"]. "</option>";
                    }
                
                   echo "</select></td>";

                   if ( isset($_GET['id']))
 {
   $id = $_GET['id'];
   $result = mysqli_query($con, "SELECT * FROM Product where PID = $id ") 
   or die(mysql_error());
   $row = mysqli_fetch_array($result);
   $name = $row[1];
   $qty = $row[2];
   $price = $row[3];
   
 }
                      ?>            
            </div>
            
            <div>
                <h6 class="text-muted mt-4">
                    Product Name
                </h6>
                
                
                <input type="text" name = "pname" value ="<?php echo $name; ?>"/> 
            </div>
            <div>
                <h6 class="text-muted mt-4">
                    Quantity
                </h6>
                <input type="number" name = "qty" value ="<?php echo $qty; ?>">
            </div>
            <div>
                <h6 class="text-muted mt-4">
                Product Number
                </h4>
                <input class = "textboxID" type="number" name = "pid" value ="<?php echo $id; ?>">              
                <div>
                <h6 class="text-muted mt-4">
                    Unit Price
                </h6>
                <input type="number" name = "price" value ="<?php echo $price; ?>">
                <h6 class="text-muted mt-4">
                    Image 
                </h6>
                <input type="file" name = "image">
            </div>
      <span>
     <input type = "submit" name = "update" value = "Save" class="btn btn-secondary" /> 
     <input type = "submit" name = "delete" value = "Delete" class="btn btn-warning"/> 
      </span>
      <!-- Button with Popup -->
      <input type="submit" name = "save" value = " SAVE CHANGES"class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
       
      
    </form>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">NOTE</h5>
              <input type="submit" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              
            </div>
            <div class="modal-body">
              Are you sure about making these changes?
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
              <submit type="submit" class="btn btn-outline-info">Save</button>
            </div>
          </div>
        </div>
      </div>
      </section>
      <!--Order modification section End-->

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
        </footer>
        <?php
 
 
 //
if (isset($_POST["save"]))
  {
    $image = "cucumber.jpg";
    echo '<script type="text/javascript"> alert("Record will be added") </script>';  
    $sql = "insert into Product values('{$_POST['pid']}' ,'{$_POST['pname']}','{$_POST['qty']}','{$_POST['price']}','{$_POST['CatID']}','$image')";
    $result = mysqli_query($con ,$sql);                             
 
   if($result)              
   {
   echo '<script type="text/javascript"> alert("Product is added Successfully .......") </script>';                                     
   header ("Location: ProductList.php");
   }
   else
  {
  echo '<script type="text/javascript"> alert("Product not added .......") </script>';
  } 
}
else if (isset($_POST["update"]))
{
    $sql = "update  Product set name = '{$_POST['pname']}' , Qty = '{$_POST['qty']}' , UnitPrice = '{$_POST['price']}' where PID = '{$_POST['pid']}' ";
    $result = mysqli_query($con ,$sql);                             
 
   if($result)              
   {
    echo '<script type="text/javascript"> alert("Product is updated .......") </script>';
    header ("Location: ProductList.php");
  }
}
else if (isset($_POST["delete"]))
{
    $sql = "delete from Product where PID = '{$_POST['pid']}' ";
    $result = mysqli_query($con ,$sql);                             
 
   if($result)              
   {
    echo '<script type="text/javascript"> alert("Product is deleted  .......") </script>';
    header ("Location: ProductList.php");
  }
  mysqli_close($con);
}

 
   ?>
 </html>
        <!-- Footer Section End -->