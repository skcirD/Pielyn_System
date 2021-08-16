<?php
    require_once '../php/init.php';
    security_session();
    error_reporting(0); //turn off error reporting.
    $categName = $_GET['cn'];
    $categId = $_GET['id'];
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pielyn Inventory System</title>
    <link rel="icon" href="images/circle-Logo1.png">
    <link rel="stylesheet" href="../css/update_category.css">
  </head>
  <body>
    <?php include('../php/navigation.php') ?>

    <div class="main-content">
        <div class="updateCategory_formContainer">
            <h1>Update Brand</h1>
            <form class="updateCategory_form" action="" method="GET">
                  <div>
                        <input type="hidden" name="categoryId" value="<?php echo $categId ?>">
                        <label>Brand</label>
                        <input class="inputCategory" type="text" name="category" value="<?php echo $categName ?>">
                  </div>
                  <button class="btnUpdate" type="submit" name="btnUpdate">Update</button>
                  <?php updateCategory(); ?>
            </form>
        </div>
    </div>
  </body>
</html>
