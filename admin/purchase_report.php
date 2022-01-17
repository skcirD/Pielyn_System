<?php
require_once '../php/init.php';
session_start();
security_session();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Purchase Report</title>
    <meta charset="utf-8">
    <link rel="icon" href="images/circle-Logo1.png">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/purchase_order.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  </head>

  <body style="background: #DCDCDC;">
      <?php include ('../php/navigation.php'); ?>

      <div class="main-content">
          <div class="table-con">
            <div class="tableTop-con">

                <h1>Purchase Report</h1>
                <form class="" action="" method="get">
                    <input type="search" name="search" placeholder="Search Purchase No">
                </form>
            </div>
              <table class="table" id="table">
                  <thead>
                      <th style="width:10px;">#</th>
                      <th style="width:500px;">Productname</th>
                      <th style="width: 500px">Supplier</th>
                      <th style="width: 50px">Totalprice</th>
                      <th style="width: 50px">Orderdate</th>
                      <th style="width: 50px">Ordertime</th>
                      <th style="width: 50px">Orderreceive</th>
                      <th style="width: 70px">Status</th>
                      <th style="width: 100px">Purchaseno</th>
                      <th style="width: 80px">OrderBy</th>
                  </thead>
                  <tbody id="tbl">
                      <?php displayPurchaseOrderReport(); searchPurchaseOrder();?>
                  </tbody>
              </table>
          </div>
      </div>
      <div class="print-con">
        <form class="" action="" method="post">
          <input type="submit" name="btnPrint" style="background: #008D96;" value="Print">
          <?php printPO(); ?>
        </form>
      </div>
      <div class="btnb">
        <a id="btnback" href="index.php">Back</a>
      </div>
  </body>
  </html>
