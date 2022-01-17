<?php
require_once '../php/init.php';
session_start();
security_session();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Audit Trail</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="icon" href="images/circle-Logo1.png">
    <!-- <link rel="stylesheet" href="../css/index.css"> -->
    <link rel="stylesheet" href="../css/audit_trail.css">
    <!-- <link rel="stylesheet" href="../css/product.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  </head>

  <body style="background: #DCDCDC;">
      <?php include ('../php/navigation.php'); ?>

      <div class="main-content">
          <div class="table-con">
            <div class="tableTop-con">

                <h1>Audit Trail</h1>

            </div>
              <table>
                  <thead>
                      <th style="width:10px;">#</th>
                      <th style="width:500px;">User fullname</th>
                      <th style="width: 100px">Position</th>
                      <th style="width: 100px">Logdate</th>
                      <th style="width: 100px">Timein</th>
                      <th style="width: 100px">Timeout</th>
                  </thead>
                  <tbody>
                      <?php displayAuditT(); ?>
                  </tbody>
              </table>
          </div>
      </div>
      <div class="btn">
        <a id="btnback" href="index.php">Back</a>
      </div>
  </body>
  </html>
