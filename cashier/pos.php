<?php
require_once '../php/init.php';

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Point of Sale</title>
     <link rel="stylesheet" href="../css/pos.css">
     <link rel="icon" href="images/pos-Logo1.png">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
   </head>
   <body>
      <div class="main-container">
            <div class="header-con">
                <div class="logo-container">
                  <div class="logo-text-container">
                      <img class="top-logo" src="../admin/images/circle-Logo1.png" alt="img">
                      <div class="logo-text">
                        <h2 style="margin:5px;">POS | </h2>
                        <h2 style="margin:0 5px;">Pielyn Store</h2>
                      </div>
                      <div class="bottomPannel-orange">

                      </div>
                  </div>


                </div>
                <div class="info-container">
                    <h6>Cashier: <p style = "display: inline;">Badang</p></h6>
                    <h6>Date: <p style = "display: inline;">Tuesday, Aug 17, 2021</p></h6>
                    <h6>Transaction No: <p style = "display: inline;">202008171001</p></h6>
                </div>
                <div class="total-container">
                      <h4 style= "margin-top: 5px; margin-left: 5px">Grand Total</h4>
                      <h6 style= "font-size: 25px; margin-left: 250px; margin-top: 40px;">₱ 10,0000.00</h6>
                </div>
            </div>
            <div class="body-con">
              <div class="pos-table-container">
                <table class="pos-table">
                    <thead>
                        <tr>
                          <th>Barcode</th>
                          <th>Description</th>
                          <th>Price</th>
                          <th>Sub.Total</th>
                          <th>Qty</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
               </table>
             </div>
                <!-- <div class="pos-table-container">
                    <table class="pos-table">
                        <thead>
                            <th>Barcode</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Sub.Total</th>
                            <th>Action</th>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div> -->
                <div class="search-container">
                    <form class="search-form" action="" method="post">
                        <input class="txt-search" type="search" name="txt-searchBar" placeholder="Search Product">
                        <input class="btn-search" type="submit" name="btn-search" value="search">
                    </form>
                    <div class="pos-table2-container">
                        <table class="pos-table2" style="">
                            <thead>
                              <tr>
                                <th>Barcode</th>
                                <th>Product Name</th>
                                <th >Price</th>
                                <th>stocks</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                <!-- <?php  ?> display_pos_product(); -->
                                <?php searchProduct(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="footer-con">
                <div class="cancel-finish-container">
                    <div class="btn-finish-con">
                        <input class="btn-finish" type="submit" name="btn-finish" value="Finish">
                    </div>
                    <div class="label-totalAmount-con">
                        <h3>Total: ₱10,000.00</h3>
                    </div>
                    <div class="btn-cancel-con" style="float:right;">
                        <input class="btn-cancel" type="submit" name="btn-cancel" value="Cancel">
                    </div>
                </div>
                <div class="button-con">
                    <div class="btn">
                        <input type="submit" name="btn-newTransaction" value="[F1] New Transaction">
                    </div>
                    <div class="btn">
                        <input type="submit" name="btn-searchProduct" value="[F2] Search Product">
                    </div>
                    <div class="btn">
                        <input type="submit" name="btn-addProduct" value="[F3] Add Product">
                    </div>
                    <div class="btn">
                        <input type="submit" name="btn-settlePayment" value="[F4] Settle Payment">
                    </div>
                    <div class="updateBrand_formContainer">
                        <input type="submit" name="btn-clearCart" value="[F5] Clear Cart">
                    </div>
                    <div class="btn">
                        <input type="submit" name="btn-dailySales" value="[F6] Daily sales">
                    </div>
                    <div class="btn">
                        <input type="submit" name="btn-changePassword" value="[F7] Change Password">
                    </div>
                    <div class="logout-con">
                        <a class="btn-logout" href="../admin/logout.php">Logout</a>
                    </div>
                </div>
            </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.js" charset="utf-8"></script>
      <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" charset="utf-8"></script>
   </body>
 </html>
 <script type="text/javascript">
   $(document).ready(function() {
       $('#example').DataTable();
   } );
 </script>
