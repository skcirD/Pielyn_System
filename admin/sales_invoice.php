<?php
require_once '../php/init.php';
session_start();
security_session();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="images/circle-Logo1.png">
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- <link rel="stylesheet" href="../css/index.css"> -->
    <link rel="stylesheet" href="../css/sales_invoice.css">
    <!-- <link rel="stylesheet" href="../css/product.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>Sales Invoice</title>
  </head>

  <body style="background: #DCDCDC;">
      <?php include ('../php/navigation.php'); ?>

      <div class="main-content">
          <div class="date-top">
              <form class="" action="" method="get">
                  <label>Filter</label>
                  <input type="date" name="sdate">
                  <input type="date" name="edate">
                  <input id="btnLoad" type="submit" name="btnSubmit" value="Load Data">
              </form>
              <form class="" action="" method="get">
                <input id="srch" type="search" name="search" placeholder="Search Transaction No here.">
              </form>
          </div>
          <div class="lbl-totalSales">
              <label>Total Sales: Php</label>
              <label id="total"><?php displayTotalSales();?></label>

          </div>
          <div class="table-con">
            <!-- <div class="tableTop-con">



            </div> -->
              <table id="ttbl">
                  <thead>
                      <th style="width:100px;">Username</th>
                      <th style="width:80px;">TransactionNo</th>
                      <th style="width: 100px">Pcode</th>
                      <th style="width: 500px">productname</th>
                      <th style="width: 100px">Quantity</th>
                      <th style="width: 100px">Totalprice</th>
                      <th style="width: 100px">Date</th>
                      <th style="width: 100px">Time</th>
                  </thead>
                  <tbody  id="tbl">
                    <?php displaySsalesAndtotal(); displaySummarySales(); displaySalesByDate();  displayDAilySales(); searchByTransacstionNo();?>
                  </tbody>

              </table>
          </div>
      </div>
      <div class="btn-bottom">
        <form class="" action="" method="post">
          <input id="btnSsales" type="submit" name="btnSummary" value="Summary Sales">
          <!-- <input type="submit" name="btnDSales" value="Daily Sales"> -->
          <input type="submit" name="btnPrint" style="background: #008D96;" value="Print">
          <!-- <a href="sales_invoice_print.php" name="button" style="background: #008D96;" value="Print">Print</a> -->
          <?php printTSales();?>
        </form>
      </div>
      <div class="btn">
        <a id="btnback" href="index.php">Back</a>
      </div>

      <script src="../javascript/sales_invoice.js" charset="utf-8"></script>
  </body>

  <script type="text/javascript">

  </script>
  </html>
