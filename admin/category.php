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
    <link rel="stylesheet" href="../css/category.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <!-- for DATATABLE -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
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
              <li class="cat"><a class="cat" href="category.php"><i class="fas fa-folder"></i>Category</a></li>
              <li><a href="stock_entry.php"><i class="fas fa-clipboard-list"></i>Stock Entry</a></li>
              <li><a href="stock_adjustment.php"><i class="fas fa-chart-pie"></i>Stock Adjustment</a></li>
              <li><a href="reports.php"><i class="fas fa-database"></i></i>Reports</a></li>
              <li><a href="user_settings.php"><i class="fas fa-cog"></i></i>User Settings</a></li>
            </ul>
        </div>
      </div>
      <div class="main-content">
            <h3>Manage </h3><h6>Category</h6>
            <?php
              delete_category();
              add_Category()
             ?>
            <input class="btn-addcategory" id="btn-category" type="button" name="btn-addcategory" value="Add category">
          <div class="category-container">
            <h1 class="text-category">Manage Category</h1>
            <table class="category-table display" id="example">
                <thead>
                    <th>#</th>
                    <th>Category Name</th>
                    <th class="op">Action</th>
                </thead>
                <?php displayCategory(); ?>
            </table>
          </div>
      </div>

      <div class="addCategory-modal">
        <form class="add-category" action="" method="GET">
          <hr class="top-hr">
          <div class="addCategory-container">
                <h4>Add Category <span class="modal-closebtn">&times;</span></h4>
                <label for="">Category Name</label>
                <input class="input-category" type="text" name="txt-category" placeholder="Enter category name" required>
                <input class="btn-addCategory" type="submit" name="btn-addCategory" value="Add">
          </div>
          <hr class="bottom-hr">
        </form>
      </div>

      <script src="../javascript/category.js" charset="utf-8"></script>
      <!-- for DATATABLE -->
      <script src="https://code.jquery.com/jquery-3.5.1.js" charset="utf-8"></script>
      <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" charset="utf-8"></script>
  </body>
</html>
<!-- JAVASCCRIPT -->
<script type="text/javascript">
  $(document).ready(function() {
      $('#example').DataTable();
  } );
</script>
