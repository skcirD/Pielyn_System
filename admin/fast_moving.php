<?php
  require_once '../php/init.php';
  require "../class/config.php";
  session_start();
  security_session();
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Fast Moving</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="icon" href="images/circle-Logo1.png">
    <link rel="stylesheet" href="../css/fast_moving.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  </head>

  <body style="background: #DCDCDC;">
    <?php
      $d = new config();
      $query = "SELECT pcode, pdesc, price, sum(qty) as total_stock_sold, SUM(total) as total_price_sold
                              from cart WHERE status='Sold' GROUP BY pcode ORDER BY total_stock_sold ASC LIMIT 8";
      $step = $d->con();
      $stmt = $step->prepare($query);
      if($stmt->execute()){
        $php_data_array = $stmt->fetchALL();

        echo "<script>
                  var  my_2d =". json_encode($php_data_array)."
              </script>";
      }else{
        print_r("ERROR");
      }
     ?>
      <?php include ('../php/navigation.php'); ?>

      <div class="main-content">
          <div class="table-con">
            <div class="tableTop-con">

                <h1>FAST MOVING</h1>

            </div>
              <table>
                  <thead>
                      <th style="width:10px;">#</th>
                      <th style="width:100px;">PCODE</th>
                      <th style="width: 500px">PRODUCT_NAME</th>
                      <th style="width: 50px">PRODUCT_PRICE</th>
                      <th style="width: 50px">TOTAL_STOCK_SOLD</th>
                      <th style="width: 50px">TOTAL_PRICE_SOLD</th>
                  </thead>
                  <tbody>
                      <?php displayFastMoving(); ?>
                  </tbody>
              </table>
          </div>

      </div>
      <div class="btn">
        <a id="btnback" href="index.php">Back</a>
      </div>


  </body>
  </html>
