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
    <title>Purchase Order Print</title>
    <link rel="icon" href="images/circle-Logo1.png">
    <link rel="stylesheet" href="../css/purchase_order_print.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  </head>

  <body style="padding: 100px;">
            <div class="tableTop-con">

                <h1>Purchase Report</h1>

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
                      <?php printPO(); ?>

                  </tbody>

              </table>
          </div>
      </div>
  </body>
  </html>
