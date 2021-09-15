<?php
require_once '../php/init.php';
session_start();
security_session();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pielyn Inventory System</title>
    <link rel="icon" href="images/circle-Logo1.png">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  </head>
  <body>
      <div class="nav-bar">
        <div class="logo">
          <img class="top-logo" src="images/circle-Logo1.png" alt="img">
          <h1 class="pielyn-store">Inventory System | Pielyn Store</h1>
        </div>

        <h4 class="user"><?php echo $_SESSION['firstname']." ".$_SESSION['lastname']; ?><a href="logout.php"> -> Logout</a></h4>

      </div>
      <div class="wrapper">
        <div class="side-bar">
            <ul>
              <li><a href="index.php"><i class="fas fa-home"></i>Dashboard</a></li>
              <li><a href="product.php"><i class="fas fa-shopping-cart"></i>Product</a></li>
              <li><a href="brand.php"><i class="fas fa-folder-open"></i>Brand</a></li>
              <li><a href="category.php"><i class="fas fa-folder"></i>Category</a></li>
              <li><a href="stock_entry.php"><i class="fas fa-clipboard-list"></i>Stock Entry</a></li>
              <li><a href="stock_adjustment.php"><i class="fas fa-chart-pie"></i>Stock Adjustment</a></li>
              <li><a href="reports.php"><i class="fas fa-database"></i>Reports</a></li>
              <li><a href="user_settings.php"><i class="fas fa-cog"></i>User Settings</a></li>

            </ul>
        </div>
      </div>
      <div class="main-content">
          <div class="container">
              <div class="sales-con">
                  <div class="dailySales-icon">
                    <img calss="peso-icon" src="images/philippine-peso.png" alt="img" style="width:35px; margin-bottom:10px;">
                    <img src="images/vertical-line.png" alt="img" style="width: 10px; height: 50px;">
                  </div>
                  <div class="dailySales-info">
                    <h1 style="">1200</h1>
                    <h5>DAILY SALES</h5>
                    <!-- <p>Total daily sales recorded in the database</p> -->
                  </div>
              </div>
              <div class="product-con">
                  <div class="dailySales-icon">
                    <img src="images/supplies.png" alt="img" style="width:35px; margin-bottom:10px;">
                    <img src="images/vertical-line.png" alt="img" style="width: 10px; height: 50px;">
                  </div>
                  <div class="dailySales-info">
                    <h1>1200</h1>
                    <h5>PRODUCT LINE</h5>
                    <!-- <p>Total product line recorded in the database</p> -->
                  </div>
              </div>
              <div class="stockOnHand-con">
                <div class="dailySales-icon">
                  <img src="images/stock-on-hand.png" alt="img" style="width:35px; margin-bottom:10px;">
                  <img src="images/vertical-line.png" alt="img" style="width: 10px; height: 50px;">
                </div>
                <div class="dailySales-info">
                  <h1>0</h1>
                  <h5>STOCK ON HAND</h5>
                  <!-- <p>Total stock on hand in the database</p> -->
                </div>

              </div>
              <div class="criticalItem-con">
                <div class="dailySales-icon">
                  <img src="images/critical-items.png" alt="img" style="width:35px; margin-bottom:10px;">
                  <img src="images/vertical-line.png" alt="img" style="width: 10px; height: 50px;">
                </div>
                <div class="dailySales-info">
                  <h1>0</h1>
                  <h5>CRITICAL ITEMS</h5>
                  <!-- <p>Total critical Items</p> -->
                </div>


              </div>
              <br>
          </div>

      </div>

  </body>
</html>
