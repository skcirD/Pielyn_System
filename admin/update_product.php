<?php
    require_once '../php/init.php';
    security_session();
    error_reporting(0); //turn off error reporting.
    $id = $_GET['update'];
    $pcode = $_GET['pc'];
    $barcode = $_GET['bc'];
    $description = $_GET['dc'];
    $brand = $_GET['br'];
    $category = $_GET['cat'];
    $qty = $_GET['qty'];
    $price = $_GET['price'];
    $re_order = $_GET['rd'];
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pielyn Inventory System</title>
    <link rel="icon" href="images/circle-Logo1.png">
    <link rel="stylesheet" href="../css/update_products.css">
  </head>
  <body>
    <?php include('../php/navigation.php') ?>

    <div class="main-content">
        <div class="updateProduct_formContainer">
            <h1>Update Product</h1>
            <form class="updateProduct_form" action="" method="GET">
                  <div>
                        <input type="hidden" name="productId" value="<?php echo $id ?>">
                        <label>PCode</label>
                        <input class="inputPcode" type="text" name="pcode" value="<?php echo $pcode ?>">
                  </div>
                  <div>
                        <label>Barcode</label>
                        <input class="inputBarcode" type="number" name="barcode" value="<?php echo $barcode ?>">
                  </div>
                  <div>
                        <label>Description</label>
                        <input class="inputDescription" type="text" name="description" value="<?php echo $description ?>">
                  </div>
                  <div>
                        <label>Brand</label>
                        <select class="selectBrand" name="select-brand">
                            <?php display_brand_option() ?>
                        </select>
                  </div>
                  <div>
                        <label>Category</label>
                        <select class="selectCategory" name="select-category">
                            <?php display_categ_option(); ?>
                        </select>
                  </div>
                  <div>
                        <label>Quantity</label>
                        <input class="inputQty" type="number" name="qty" value="<?php echo $qty ?>">
                  </div>
                  <div>
                        <label>Price</label>
                        <input class="inputPrice" type="number" name="price" value="<?php echo $price ?>">
                  </div>
                  <div>
                        <label>Re_Order Level</label>
                        <input class="inputReOrderLevel" type="number" name="reOrder" value="<?php echo $re_order ?>">
                  </div>
                  <button class="btnUpdate" type="submit" name="btnUpdate">Update</button>
                  <?php updateProduct(); ?>
            </form>
        </div>
    </div>
  </body>
</html>
