

<?php
require_once '../php/init.php';
session_start();
security_session();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sales Invoice Print</title>
    <link rel="icon" href="images/circle-Logo1.png">
    <link rel="stylesheet" href="../css/sales_invoice_print.css">
  </head>
  <body style="padding-left: 150px; padding-right: 150px;">
    <div class="">
      <h1>SALES</h1>
        <label   for="">Cashier: </label><label id="cs" style="font-weight: bold;"></label><br>
        <label  for="">TransactionNo: </label><label id ="trans" style="font-weight: bold;"></label>
    </div>
      <div class="lblTotal-sales">
        <label>Total Sales: Php</label>
        <label id="total"><?php displayTotalSales();?></label>
      </div>

      <table id="ttbl" border="1">
          <thead>
              <th style="width:80px;">TransactionNo</th>
              <th style="width: 100px">Pcode</th>
              <th style="width: 200px">productname</th>
              <th style="width: 100px">Quantity</th>
              <th style="width: 100px">Totalprice</th>
              <!-- <th style="width: 100px">Date</th>
              <th style="width: 100px">Time</th> -->
          </thead>
          <tbody  id="tbl">
            <?php displaySummarySales(); displaySalesByDate();  displayDAilySales(); searchByTransacstionNo_print();?>
            <?php printTSales(); ?>
          </tbody>

      </table>
  </body>
</html>
