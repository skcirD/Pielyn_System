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
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/brand.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

  </head>
  <body>
      <div class="nav-bar">
        <div class="logo">
          <img class="top-logo" src="images/circle-Logo1.png" alt="img">
          <h1 class="pielyn-store">Inventory System | Pielyn Store</h1>
        </div>
        <h4 class="user"><?php echo $_SESSION['firstname']." ".$_SESSION['lastname']; ?></h4>
      </div>
      <div class="wrapper">
        <div class="side-bar">
            <ul>
              <li><a href="index.php"><i class="fas fa-home"></i></i>Dashboard</a></li>
              <li><a href="product.php"><i class="fas fa-shopping-cart"></i>Product</a></li>
              <li class="brand"><a class="brand" href="brand.php"><i class="fas fa-folder-open"></i>Brand</a></li>
              <li><a href="category.php"><i class="cat fas fa-folder"></i>Category</a></li>
              <li><a href="stock_entry.php"><i class="fas fa-clipboard-list"></i>Stock Entry</a></li>
              <li><a href="stock_adjustment.php"><i class="fas fa-chart-pie"></i>Stock Adjustment</a></li>
              <li><a href="reports.php"><i class="fas fa-database"></i></i>Reports</a></li>
              <li><a href="settings.php"><i class="fas fa-cog"></i></i>Settings</a></li>
            </ul>
        </div>
      </div>
      <div class="main-content">
            <h3>Manage </h3><h6>Brands</h6>
            <?php
              delete_brand();
              add_Brand();
            ?>
            <input class="btn-addbrand" id="btn-brand" type="button" name="btn-addbrand" value="Add Brand">
          <div class="brand-container">
            <h1 class="text-brand">Manage Brands</h1>
            <table class="brand-table">
                <thead>
                    <th>#</th>
                    <th>Brand Name</th>
                    <th class="op">Action</th>
                </thead>
                <?php displayBrand(); ?>
            </table>
          </div>
      </div>

      <div class="addBrand-modal">
        <form class="add-brand" action="" method="GET">
          <hr class="top-hr">
          <div class="addBrand-container">
                <h4>Add Brand <span class="modal-closebtn">&times;</span></h4>
                <label for="">Brand Name</label>
                <input type="text" name="txt-brand" placeholder="Enter brand name">
                <input class="btn-addBrand" type="submit" name="btn-addBrand" value="Add">
          </div>
          <hr class="bottom-hr">
        </form>
      </div>
      <script src="../javascript/brand.js" charset="utf-8"></script>
      <script src="../javascript/jFunctions.js" charset="utf-8"></script>
  </body>
</html>
