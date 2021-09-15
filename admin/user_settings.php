<?php
require_once '../php/init.php';
security_session();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pielyn Inventory System</title>
    <link rel="icon" href="images/circle-Logo1.png">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/user_settings.css">
    <link rel="stylesheet" href="../css/index.css">
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

        <h4 class="user">Administrator</h4>

      </div>
      <div class="wrapper">
        <div class="side-bar">
            <ul>
              <li><a href="index.php"><i class="fas fa-home"></i></i>Dashboard</a></li>
              <li><a href="product.php"><i class="fas fa-shopping-cart"></i>Product</a></li>
              <li><a href="brand.php"><i class="fas fa-folder-open"></i>Brand</a></li>
              <li><a href="category.php"><i class="fas fa-folder"></i>Category</a></li>
              <li><a href="stock_entry.php"><i class="fas fa-clipboard-list"></i>Stock Entry</a></li>
              <li><a href="stock_adjustment.php"><i class="fas fa-chart-pie"></i>Stock Adjustment</a></li>
              <li><a href="reports.php"><i class="fas fa-database"></i></i>Reports</a></li>
              <li><a href="user_settings.php"><i class="fas fa-cog"></i></i>User Settings</a></li>
            </ul>
        </div>
      </div>
      <div class="main-content">
          <h1>USER ACCOUNT</h1>

          <div class="account-con">
                <div class="head-con">
                    <h3><a href="#">CREATE ACCOUNT/  </a></h3>
                    <h3><a href="#">CHANGE PASSWORD/    </a></h3>
                    <h3><a href="#">ACTIVATE/DEACTIVATE ACCOUNT</a></h3>
                    <hr>
                </div>
                <div class="form-con">
                    <form class="" action="" method="post">
                      <?php add_user(); ?>
                          <div class="username">
                              <label for="">Username</label>
                              <input type="text" name="userName">
                          </div>
                          <div class="password">
                              <label for="">Password</label>
                              <input type="password" name="password">
                          </div>
                          <div class="firstName">
                              <label for="">First Name</label>
                              <input type="text" name="firstName">
                          </div>
                          <div class="lastName">
                              <label for="">Last Name</label>
                              <input type="text" name="lastName">
                          </div>
                          <div class="btn-form">
                              <button type="submit" name="btn-create">Create</button>
                          </div>
                    </form>
                </div>
          </div>

      </div>

  </body>
</html>
