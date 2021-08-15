<?php
    require_once '../php/init.php';
    security_session();
    error_reporting(0); //turn off error reporting.
    $brandName = $_GET['bn'];
    $brandId = $_GET['id'];
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pielyn Inventory System</title>
    <link rel="icon" href="images/circle-Logo1.png">
    <link rel="stylesheet" href="../css/update_brand.css">
  </head>
  <body>
    <?php include('../php/navigation.php') ?>

    <div class="main-content">
        <div class="updateBrand_formContainer">
            <h1>Update Brand</h1>
            <form class="updateBrand_form" action="" method="GET">
                  <div>
                        <input type="hidden" name="brandId" value="<?php echo $brandId ?>">
                        <label>Brand</label>
                        <input class="inputBrand" type="text" name="brand" value="<?php echo $brandName ?>">
                  </div>
                  <button class="btnUpdate" type="submit" name="btnUpdate">Update</button>
                  <?php updateBrand(); ?>
            </form>
        </div>
    </div>
  </body>
</html>
