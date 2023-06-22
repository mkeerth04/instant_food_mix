<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/food order sys.jfif" />
        <title>INSTANT FOOD MIX SALES</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell best quality instant food mix items</h1>
                       <p>Flat 40% OFF on all products.</p>
                       <a href="products.php" class="btn btn-danger">Buy Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/kheer rice.jfif" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">KHEER RICE</p>
                                        <p>Choose among the best quality in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/sambar.jfif" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">SAMBAR</p>
                                    <p>Original home made tasty and healthy </p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/gravy.jfif" alt="Statue">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">GRAVY</p>
                                   <p>Your health is our goal.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               
               </div>
           </footer>
        </div>
    </body>
</html>