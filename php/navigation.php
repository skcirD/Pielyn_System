<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/nav.css">
    <!-- <link rel="stylesheet" href="../css/product.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  </head>

  <body>
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


    <script src="../javascript/date_time.js" charset="utf-8"></script>
    </body>
  </html>
