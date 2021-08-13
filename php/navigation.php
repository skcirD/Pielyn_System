<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <!-- <link rel="stylesheet" href="../css/product.css"> -->
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
                  <li><a href="brand.php"><i class="fas fa-folder-open"></i>Brand</a></li>
                  <li><a href="category.php"><i class="fas fa-folder"></i>Category</a></li>
                  <li><a href="stock_entry.php"><i class="fas fa-clipboard-list"></i>Stock Entry</a></li>
                  <li><a href="stock_adjustment.php"><i class="fas fa-chart-pie"></i>Stock Adjustment</a></li>
                  <li><a href="reports.php"><i class="fas fa-database"></i></i>Reports</a></li>
                  <li><a href="user_settings.php"><i class="fas fa-cog"></i></i>User Settings</a></li>
              </ul>
          </div>
      </div>

    </body>
  </html>
