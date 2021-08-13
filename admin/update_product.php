<?php
    require_once '../php/init.php';
    security_session();
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pielyn Inventory System</title>
    <link rel="stylesheet" href="../css/update_products.css">
  </head>
  <body>
    <?php include('../php/navigation.php') ?>

    <div class="main-content">
        <div class="updateProduct_formContainer">
            <h1>Update Products</h1>
            <form class="updateProduct_form" action="" method="GET">
                  <div class="">
                        <label>PCode</label>
                        <input type="text" name="pcode">
                  </div>
                  <div class="">
                        <label>Barcode</label>
                        <input type="text" name="barcode">
                  </div>
                  <div class="">
                        <label>Description</label>
                        <input type="text" name="descsription">
                  </div>
                  <div class="">
                        <label>Brand</label>
                        <select class="select-brand" name="select-brand"  required>
                            <option value="">--Select Brand--</option>
                            <?php display_brand_option(); ?>
                        </select>
                  </div>
                  <div class="">
                        <label>Category</label>
                        <select class="select-category" name="select-category"  required>
                            <option value="">--Select Category--</option>
                            <?php display_categ_option(); ?>
                        </select>
                  </div>
                  <div class="">
                        <label>Quantity</label>
                        <input type="text" name="barcode">
                  </div>
                  <div class="">
                        <label>Price</label>
                        <input type="text" name="pcode">
                  </div>
                  <div class="">
                        <label>Re_Order Level</label>
                        <input type="text" name="barcode">
                  </div>
            </form>
        </div>
    </div>




  </body>
</html>
