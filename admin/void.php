<?php
require_once '../php/init.php';
session_start();
security_session();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Void Report</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="icon" href="images/circle-Logo1.png">
    <link rel="stylesheet" href="../css/void.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  </head>

  <body style="background: #DCDCDC;">
      <?php include ('../php/navigation.php'); ?>

      <div class="main-content">
          <div class="table-con">
            <div class="tableTop-con">

                <a id="item" href="void.php">Item Void</a>
                <a style="margin:0; font-size: 20px;">|</a>
                <a id="po" href="po_void.php">PO Void</a>

            </div>
              <table>
                  <thead>
                      <th style="width:10px;">#</th>
                      <th style="width:50px;">Transaction No.</th>
                      <th style="width: 50px">Transaction Date</th>
                      <th style="width: 50px">Pcode</th>
                      <th style="width: 500px">Pdescription</th>
                      <th style="width: 50px">price</th>
                      <th style="width: 50px">qty</th>
                      <th style="width: 70px">Total</th>
                      <th style="width: 100px">Void By</th>
                  </thead>
                  <tbody>
                      <?php displayCartVoid(); ?>
                  </tbody>
              </table>
          </div>
      </div>
      <div class="btn">
        <a id="btnback" href="index.php">Back</a>
      </div>
  </body>
  </html>
