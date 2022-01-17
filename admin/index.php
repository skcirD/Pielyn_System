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
    <!-- <link rel="stylesheet" href="../css/dashboard.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  </head>
  <body onload="renderTime();">
      <div class="top-con" >
          <div class="logo">
              <img src="images/circle-Logo1.png" alt="logo">
          </div>
          <div class="info">
              <h1 style="font-size: 18px;">PIELYN STORE</h1>
              <h6>Position: <em><?php echo $_SESSION['role']; ?></em> </h6>
              <h6>Name: <em><?php echo $_SESSION['firstname'];echo " "; echo $_SESSION['lastname'];?></em> </h6>
          </div>
          <div id="clockDisplay" class="clock"></div>
      </div>
      <div class="main-content">

          <div class="con-1">
            <div class="col1-col2">
              <div class="col-1">
                <div id="c1" class="sales-invoice-con">
                    <img src="images/invoice.png" alt="img" style="width:50px; height: 40px; margin-bottom:10px; margin-left: 20px; margin-top:20px;">
                    <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:20px;">
                    <a href="sales_invoice.php" style="color: white;"><h3 style="margin-top: 20px; margin-left: 10px;">Store Sales</h3></a>
                </div>
                <div id="c1"  class="returnOrder-report-con">
                  <img src="images/return-box.png" alt="img" style="width:50px; height: 40px; margin-bottom:10px; margin-left: 20px; margin-top:30px;">
                  <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:30px;">
                  <a href="return_order.php" style="color: white;"><h3 style="margin-top: 30px; margin-left: 10px;">Back Order Report</h3></a>
                </div>
                <div id="c1"  class="slow-moving-con">
                  <img src="images/critical-items.png" alt="img" style="width:50px; height: 40px; margin-bottom:10px; margin-left: 20px; margin-top:30px;">
                  <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:30px;">
                  <a href="slow_moving.php" style="color: white;"><h3 style="margin-top: 30px; margin-left: 10px;">Slow Moving</h3></a>
                </div>
            </div>
            <div class="col-2">
              <div id="c2" class="purchase-orderReport-con">
                <img src="images/cargo.png" alt="img" style="width:50px; height: 40px; margin-bottom:10px; margin-left: 20px; margin-top:30px;">
                <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:30px;">
                <a href="purchase_report.php" style="color: white;"><h3 style="margin-top: 15px; margin-left: 10px;">Purchase Order Report</h3></a>
              </div>
              <div id="c2"  class="stock-report-con">
                <img src="images/report.png" alt="img" style="width:50px; height: 40px; margin-bottom:10px; margin-left: 20px; margin-top:30px;">
                <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:30px;">
                <a href="stocks_report.php" style="color: white;"><h3 style="margin-top: 30px; margin-left: 10px;">Stock Report</h3></a>
              </div>
              <div id="c2"  class="fast-moving-con">
                <img src="images/stock-on-hand.png" alt="img" style="width:50px; height: 40px; margin-bottom:10px; margin-left: 20px; margin-top:30px;">
                <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:30px;">
                <a href="fast_moving.php" style="color: white;"><h3 style="margin-top: 30px; margin-left: 10px;">Fast Moving</h3></a>
              </div>
          </div>
          </div>

          <div class="con-2" style="margin-left: 80px;">
              <div class="col-123">
                  <div class="coll1">
                    <div id="c2" class="acc-setting-con">
                        <img src="images/user.png" alt="img" style="width:60px; height: 50px; margin-bottom:10px; margin-left: 20px; margin-top:30px;">
                        <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:30px;">
                        <a href="user_settings.php" style="color: white;"><h3 style="margin-top: 30px; margin-left: 10px;">Account Setting</h3></a>
                    </div>
                    <div id="c2"  class="audit-trail-con">
                        <img src="images/attendance.png" alt="img" style="width:60px; height: 50px; margin-bottom:10px; margin-left: 20px; margin-top:30px;">
                        <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:30px;">
                        <a href="audit_trail.php" style="color: white; font-size: 18px;"><h3 style="margin-top: 30px; margin-left: 10px;">Audit Trail</h3></a>
                    </div>
                    <div id="c2" class="logout-con">
                        <img src="images/logout.png" alt="img" style="width:60px; height: 50px; margin-bottom:10px; margin-left: 20px; margin-top:30px;">
                        <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:30px;">
                        <a href="logout.php" style="color: white;"><h3 style="margin-top: 40px; margin-left: 10px;">Logout</h3></a>
                    </div>
                  </div>
                  <div class="coll2">
                    <div id="c2"   class="backup-restore-con">
                        <img src="images/restore.png" alt="img" style="width:60px; height: 50px; margin-bottom:10px; margin-left: 20px; margin-top:30px;">
                        <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:30px;">
                        <a href="backup_restore.php" style="color: white;"><h3 style="margin-top: 30px; margin-left: 10px;">Backup & Restore</h3></a>
                    </div>
                    <div id="c2"  class="audit-trail-con">
                        <img src="images/void.png" alt="img" style="width:60px; height: 50px; margin-bottom:10px; margin-left: 20px; margin-top:30px;">
                        <img src="images/vertical-line.png" alt="img" style="width:10px; height: 40px; margin-bottom:10px; margin-left: 10px; margin-top:30px;">
                        <a href="void.php" style="color: white; font-size: 18px;"><h3 style="margin-top: 30px; margin-left: 10px;">Void Reports</h3></a>
                    </div>
                  </div>
              </div>
          </div>
      </div>
</div>
    <script type="text/javascript" src="../javascript/date_time.js"></script>
  </body>

</html>
