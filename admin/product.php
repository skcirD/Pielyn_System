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
    <link rel="stylesheet" href="../css/product.css">
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
              <li><a href="category.php"><i class="fas fa-folder"></i>Category</a></li>
              <li><a href="stock_entry.php"><i class="fas fa-clipboard-list"></i>Stock Entry</a></li>
              <li><a href="stock_adjustment.php"><i class="fas fa-chart-pie"></i>Stock Adjustment</a></li>
              <li><a href="reports.php"><i class="fas fa-database"></i></i>Reports</a></li>
              <li><a href="user_settings.php"><i class="fas fa-cog"></i></i>User Settings</a></li>
            </ul>
        </div>
      </div>
      <div class="main-content">
            <h3>Manage </h3><h6>Products</h6>
            <?php
              delete_product();
              add_Product();
            ?>
            <input class="btn-addproduct" id="btn-product" type="button" name="btn-addproduct" value="Add Product">
          <div class="product-container">
            <h1 class="text-product">Manage Products</h1>
            <table class="product-table display" id="example" >
                <thead>
                    <th>#</th>
                    <th>Pcode</th>
                    <th>Barcode</th>
                    <th>Description</th>
                    <th>Brand</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Re-order</th>
                    <th class="op">Action</th>
                </thead>
                <?php displayProduct(); ?>
            </table>
          </div>
      </div>

      <div class="addProduct-modal">
        <form class="add-product" action="" method="GET">
          <hr class="top-hr">
          <div class="addProduct-container">
                <h4>Add Product <span class="modal-closebtn">&times;</span></h4>

                <label for="">PCode</label>
                <input class="input-pcode" type="text" name="txt-pcode" required><br>

                <label for="">Barcode</label>
                <input class="input-barcode" type="number" name="txt-barcode"><br>

                <label for="">Description</label>
                <input class="input-description" type="text" name="txt-description" required><br>

                <label for="">Brand</label>
                <select class="select-brand" name="select-brand"  required>
                    <?php display_brand_option(); ?>
                </select>

                <label for="">Category</label>
                <select class="select-category" name="select-category"  required>
                    <?php display_categ_option(); ?>
                </select>

                <label for="">Quantity</label>
                <input class="input-qty" type="number" name="txt-qty"  required><br>

                <label for="">Price</label>
                <input class="input-price" type="number" name="txt-price"  required><br>

                <label for="">Re-Order Level</label>
                <input class="input-reOrder" type="number" name="txt-reOrder"  required><br>

                <button class="btn-addProduct" type="submit" name="btn-addProduct">Add</button>
          </div>
          <hr class="bottom-hr">
        </form>
      </div>



  <script src="../javascript/product.js" charset="utf-8"></script>
  <!-- for DATATABLE -->
  <script src="https://code.jquery.com/jquery-3.5.1.js" charset="utf-8"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" charset="utf-8"></script>
  </body>
</html>


<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
