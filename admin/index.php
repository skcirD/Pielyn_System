<?php
require_once '../php/init.php';
session_start();
security_session();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pielyn Inventory System</title>
    <link rel="icon" href="images/circle-Logo1.png">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/index.css">
  </head>
  <body onload="renderTime();">
    <div class="main">
        <div class="nav">
          <div class="logo">
            <img src="images/circle-Logo1.png" alt="logo" style="width:70px;height:60px;margin:8px;">
          </div>
          <div class="info">
            <h1 style="font-size: 18px;">PIELYN STORE</h1>
            <h6 style="margin:0;">Position: <em><?php echo $_SESSION['role']; ?></em> </h6>
            <h6 style="margin:0;">Name: <em><?php echo $_SESSION['firstname'];echo " "; echo $_SESSION['lastname'];?></em> </h6>
          </div>
          <div id="clockDisplay" class="clock"></div>
        </div>
        <div class="ss">
          <img src="images/invoice.png" alt="img" style="width:50px; height: 40px; margin-bottom:10px; margin-left: 20px; margin-top:20px;">
          <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:20px;">
          <a href="sales_invoice.php" style="color: white;"><h3 style="margin-top: 20px; margin-left: 10px;">Store Sales</h3></a>
        </div>
        <div class="po">
          <img src="images/cargo.png" alt="img" style="width:50px; height: 40px; margin-bottom:10px; margin-left: 20px; margin-top:30px;">
          <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:30px;">
          <a href="purchase_report.php" style="color: white;"><h3 style="margin-top: 15px; margin-left: 10px;">Purchase Order Report</h3></a>
        </div>
        <div class="as">
          <img src="images/user.png" alt="img" style="width:60px; height: 50px; margin-bottom:10px; margin-left: 20px; margin-top:30px;">
          <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:30px;">
          <a href="user_settings.php" style="color: white;"><h3 style="margin-top: 30px; margin-left: 10px;">Account Setting</h3></a>
        </div>
        <div class="bnr">
          <img src="images/restore.png" alt="img" style="width:60px; height: 50px; margin-bottom:10px; margin-left: 20px; margin-top:30px;">
          <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:30px;">
          <a href="backup_restore.php" style="color: white;"><h3 style="margin-top: 30px; margin-left: 10px;">Backup & Restore</h3></a>
        </div>
        <div class="bor">
          <img src="images/return-box.png" alt="img" style="width:50px; height: 40px; margin-bottom:10px; margin-left: 20px; margin-top:30px;">
          <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:30px;">
          <a href="return_order.php" style="color: white;"><h3 style="margin-top: 30px; margin-left: 10px;">Back Order Report</h3></a>
        </div>
        <div class="sr">
          <img src="images/report.png" alt="img" style="width:50px; height: 40px; margin-bottom:10px; margin-left: 20px; margin-top:30px;">
          <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:30px;">
          <a href="stocks_report.php" style="color: white;"><h3 style="margin-top: 30px; margin-left: 10px;">Stock Report</h3></a>
        </div>
        <div class="at">
          <img src="images/attendance.png" alt="img" style="width:60px; height: 50px; margin-bottom:10px; margin-left: 20px; margin-top:30px;">
          <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:30px;">
          <a href="audit_trail.php" style="color: white; font-size: 18px;"><h3 style="margin-top: 30px; margin-left: 10px;">Audit Trail</h3></a>
        </div>
        <div class="vr">
          <img src="images/void.png" alt="img" style="width:60px; height: 50px; margin-bottom:10px; margin-left: 20px; margin-top:30px;">
          <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:30px;">
          <a href="void.php" style="color: white; font-size: 18px;"><h3 style="margin-top: 30px; margin-left: 10px;">Void Reports</h3></a>
        </div>
        <div class="sm">
          <img src="images/critical-items.png" alt="img" style="width:50px; height: 40px; margin-bottom:10px; margin-left: 20px; margin-top:30px;">
          <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:30px;">
          <a href="slow_moving.php" style="color: white;"><h3 style="margin-top: 30px; margin-left: 10px;">Slow Moving</h3></a>
        </div>
        <div class="fm">
          <img src="images/stock-on-hand.png" alt="img" style="width:50px; height: 40px; margin-bottom:10px; margin-left: 20px; margin-top:30px;">
          <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:30px;">
          <a href="fast_moving.php" style="color: white;"><h3 style="margin-top: 30px; margin-left: 10px;">Fast Moving</h3></a>
        </div>
        <div class="lg">
          <img src="images/logout.png" alt="img" style="width:60px; height: 50px; margin-bottom:10px; margin-left: 20px; margin-top:30px;">
          <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:30px;">
          <a href="logout.php" style="color: white;"><h3 style="margin-top: 40px; margin-left: 10px;">Logout</h3></a>
        </div>
    </div>
    <script type="text/javascript" src="../javascript/date_time.js"></script>
  </body>

</html>
