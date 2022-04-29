<?php include('conn/connection.php'); ?>

<?php 
  session_start();
  if(isset($_SESSION['u_name']))
  {
    session_unset();
    session_destroy();
    header('location:INDEX.php');
  }
  elseif(!isset($_SESSION['admin']))
  {
    header('location:INDEX.php');
  }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>BRAVEHEARTZ ONLINE ARDUINO SHOP</title>

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="css/slick.css"/>
        <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link type="text/css" rel="stylesheet" href="css/newstyle.css"/>

        <script defer src="js/script.js"></script>


    </head>
    <body>
        <!-- HEADER -->
        <header>
            <!-- TOP HEADER -->
            <div id="top-header">
                <div class="container">
                    <ul class="header-links pull-left">
                        <li><a href="#"><i class="fa fa-phone"></i> +9471-3565356</a></li>
                        <li><a href="#"><i class="fa fa-envelope-o"></i> arduinostore@gmail.com</a></li>
                        <li><a href="#"><i class="fa fa-map-marker"></i> south eastern university of sri lanka</a></li>
                    </ul>
                    <ul class="header-links pull-right">
                        <li><a href="?id=LOGOUT"><i class="user"></i>LOGOUT</a></li>
                        <?php if(isset($_GET['id']))
                        {   
                            $id=$_GET['id'];
                            if ($id=="LOGOUT") 
                            {
                                include 'connection.php';
                                session_start();
                                session_unset();
                                session_destroy();
                                header('location:sign.php');
                            }
                            else
                            {
                                echo "logout error";
                            }
                        } 
                        ?>
                    </ul>
                </div>
            </div>
            <!-- /TOP HEADER -->
            
                        
            <!-- MAIN HEADER -->
            <div id="header">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row" style="height:4vw">
                        <!-- LOGO -->
                        
                            <div class="banner" style="overflow: hidden;height: 9.1vw;position: absolute;margin-top: -1.1vw;margin-left: -12vw;z-index: 0">
                                <video autoplay muted loop 
                             style="transform: rotate(180deg);height: 115vh;">
                                    <source src="./Images/bg.mp4" type="video/mp4">
                                </video>
                            </div>
                        <!-- /LOGO -->
                        <div class="anim-header">
                            <span style="--i:1;">B</span>
                            <span style="--i:2;">R</span>
                            <span style="--i:3;">A</span>
                            <span style="--i:4;">V</span>
                            <span style="--i:5;">E</span>
                            <span style="--i:6;">H</span>
                            <span style="--i:7;">E</span>
                            <span style="--i:8;">A</span>
                            <span style="--i:9;">R</span>
                            <span style="--i:10;">T</span>
                            <span style="--i:11;">Z</span>
                        </div>
                                
                                <!-- /Cart -->
                    <div class="searchnew-bar">
                        <div class="col-md-3 clearfix">
                            

                            <div class="wrap">
                                <div class="search">
                                    <input type="text" class="searchTerm" placeholder="What are you looking for?">
                                        <button type="submit" class="searchButton">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>  
                                
                                
                                <div class="cart" style="z-index: 4;position: absolute;">
                                    <a href="CHECKOUT.php">
                                        <i class="fa fa-cart-plus" ><br>CART</i>
                                    </a>
                                </div>
                    </div>

                </div>
                    <!-- row -->
            </div>
                <!-- container -->
        </header>
        <!-- /HEADER -->
<!-- NAVIGATION -->
        <nav id="navigation">
            <!-- container -->
            <div class="container">
                <!-- responsive-nav -->
                <div id="responsive-nav">
                    <!-- NAV -->
                    <ul class="main-nav nav navbar-nav">
                        <li><a href="INDEX.php">Home</a></li>
                        <li><a href="MBSTORE.php">Orders</a></li>
                        <li><a href="TOOLS.php">Product Stocks</a></li>
                        <li><a href="MCSTORE.php">Updates</a></li>

                    </ul>
                    <!-- /NAV -->
                </div>
                <!-- /responsive-nav -->
            </div>
            <!-- /container -->
        </nav>
        <!-- /NAVIGATION -->