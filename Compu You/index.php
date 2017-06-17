<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}




?>


<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Compu You</title>
    <link rel="stylesheet" href="css/foundation.css" />
        <link rel="stylesheet" href="css/style.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a><img src="http://www.codeyeti.com/wp-content/uploads/2016/08/cylogo-2.png" height="48" width="48"/></a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
        <li><form action="search.php" method="post"><input type="search"  placeholder="Search" name="term"></form></li>
                  <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <?php


          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>

        <ul class="left">
          <li><a href="index.php">Compu You</a></li>
          <li><a href="products.php">Laptops</a></li>
          <li><a href="pcs.php">Pcs</a></li>
           <li><a href="tablets.php">Tablets</a></li>
        </ul>
      </section>
    </nav>




    <ul class="example-orbit" data-orbit data-options="pause_on_hover:false; timer_speed:5000;">
  <li>
    <img src="images/index.jpg" alt="slide 1" width="1920" height="900" />
    <div class="orbit-caption">
      Compu You is one of the leading computer trading companies in Egypt.
    </div>
  </li>
  <li class="active">
     <img src="images/index2.jpg" alt="slide 2" width="1920" height="900" />
    <div class="orbit-caption">
      You can find the best Laptops, Computers & Tablets with the lowest prices.
    </div>
  </li>
  <li>
     <img src="images/index3.jpg" alt="slide 3" width="1920" height="900" />
    <div class="orbit-caption">
      Coming Soon.
    </div>
  </li>
</ul>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
