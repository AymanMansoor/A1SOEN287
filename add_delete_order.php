<?php
    session_start();
?>

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
    <link rel="stylesheet" href="css/p11.css" type="text/css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <!--JavaScript-->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>  
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
		
		 <!-- ADD AN ORDER -->
    <div class="flex-wrapper">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 align-self-center mx-auto mt-5  mb-5">
          <div class="card text-center">
                <div class="card-header bg-dark text-white">
                    <h1>Create an order</h1>
                </div>
                <?php
                    session_start();
                    $xml = simplexml_load_file('order_info.xml');
                    if (isset($_POST['insert'])){
                        //$xml = simplexml_load_file('order_info.xml');
                        //$currentAmount = $xml->amount;
                        //$newOrder = $xml -> order_list-> addChild("order");
                        //$newUser = $xml ->addChild("user", $_POST['user']);
                        //$newOrderNum = $xml ->addChild("order_num", $_POST['order_num']);
                        //$newOrderList = $xml ->addChild("orderList", $_POST['orderList']);
                        //$xml->amount = intval($currentAmount)+1;
                        //$xml->asXML("../../order_info.xml");

                        $xml = new DomDocument("1.0", "UTF-8");
                        $xml -> load('order_info.xml');

                        $newUser = $_POST['user'];
                        $newOrderNum = $_POST['order_num'];
                        $newOrderList = $_POST['orderList'];

                        $rootTag = $xml -> getElementsByTagname('order_list') -> item(0);

                        $infoTag = $xml -> createElement("order");
                        $userTag = $xml -> createElement("user", $newUser);
                        $orderNumTag = $xml -> createElement("order_num", $newOrderNum);
                        $orderListTag = $xml -> createElement("orderList", $newOrderList);

                        $infoTag ->appendChild($userTag);
                        $infoTag ->appendChild($orderNumTag);
                        $infoTag ->appendChild($orderListTag);

                        $rootTag -> appendChild($infoTag);
                        $xml->save('order_info.xml');
                    

                        echo ("Your order has been successfully added!");
                    }
                ?>

                <div class="card-body my-auto ">
                    <form method = "POST" action="add_delete_order.php">
                        Order Info wished to be added</br>
                        User Name <input type = "text" name = "user"></br>
                        Order Number <input type = "text" name = "order_num"></br>
                        Order List <input type = "text" name = "orderList"></br>
                        <input type="submit" name = "insert" value = "Add" class="btn btn-primary mt-3 mb-3">
                    </form>
                </div>
            </div>
        </div>


        <!-- DELETE AN ORDER-->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 align-self-center mx-auto mt-5  mb-5">
            <div class="card text-center">
                <div class="card-header bg-dark text-white">
                    <h1>Delete an order</h1>
                </div>
                <div class="card-body my-auto ">
                    <form method = "POST" action = "add_delete_order.php">
                        Order wished to be deleted <br>
                        Order Number <input type = "text" name = "order_num"><br>
                        <input type="submit" name = "delete" value = "Delete" class="btn btn-primary mt-3 mb-3">
                    </form>
                </div>
                <?php
                    session_start();
                    if(isset($_POST['delete'])){
                        $xml = new DomDocument("1.0", "UTF-8");
                        $xml->load('order_info.xml');

                        $orderNum = $_POST['order_num'];

                        $xpath = new DOMXPath($xml);

                        foreach($xpath -> query("/order_list/order[order_num = '$orderNum']") as $node){
                            $node->parentNode->removeChild($node);

                        }

                        $xml -> save('order_info.xml');

                        echo ("Your order has been successfully deleted!");

                    }
                ?>
            </div>
        </div>
    </div>

