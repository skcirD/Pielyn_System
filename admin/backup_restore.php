<?php
require_once '../php/init.php';
  require "../class/config.php";
session_start();
security_session();

?>
<?php
function dropTable(){
  // $dbhost = 'localhost';
  // $dbuser = 'u249832963_pielyn';
  // $dbpass = 'Pielynstore123';
  // $dbname = 'u249832963_pielyn_db'; HOSTINGER

  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'pielyn_db';
  $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

  $stmt="DROP TABLE `audit_trail`, `brand`, `cart`, `cart_void`, `category`, `expiration_date`, `no_expiration_date`, `po_void`, `product`, `purchase_order`,
  `receipt`, `stocks`, `supplier`, `supplier_products`, `users`";
  mysqli_query($mysqli,$stmt);
}
?>
<?php

$message = '';
if(isset($_POST["import"]))
{

 if($_FILES["database"]["name"] != '')
 {
  $array = explode(".", $_FILES["database"]["name"]);
  $extension = end($array);
  if($extension == 'sql')
  {
    dropTable();
   // $connect = mysqli_connect("localhost", "u249832963_pielyn", "Pielynstore123", "u249832963_pielyn_db"); HOSTINGER
   $connect = mysqli_connect("localhost", "root", "", "pielyn_db");
   $output = '';
   $count = 0;
   $file_data = file($_FILES["database"]["tmp_name"]);
   foreach($file_data as $row)
   {
    $start_character = substr(trim($row), 0, 2);
    if($start_character != '--' || $start_character != '/*' || $start_character != '//' || $row != '')
    {
     $output = $output . $row;
     $end_character = substr(trim($row), -1, 1);
     if($end_character == ';')
     {
      if(!mysqli_query($connect, $output))
      {
       $count++;
      }
      $output = '';
     }
    }
   }
   if($count > 0)
   {
    $message = '<label style="position: absolute; top: 200px; color:red">There is an error in Database Import</label>';
   }
   else
   {
    $message = '<label style="position: absolute; top: 200px;">Database Successfully Imported</label>';
   }
  }
  else
  {
   $message = '<label style="position: absolute; top: 200px; color:red">Invalid File</label>';
  }
 }
 else
 {
  $message = '<label style="position: absolute; top: 200px; color:red">Please Select Sql File</label>';
 }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="images/circle-Logo1.png">
    <title>Backup and Restore</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- <link rel="stylesheet" href="../css/index.css"> -->
    <link rel="stylesheet" href="../css/backup_restore.css">
    <!-- <link rel="stylesheet" href="../css/product.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  </head>

  <body style="background: #ffffff;">
      <?php include ('../php/navigation.php'); ?>

      <div class="main-content">
        <div class="con-1">
          <div id="fr1-con">
              <form  action="backup_database.php">
                  <fieldset style="width: 350px; height:220px; border: 3px solid #008D96;">
                  <h3 style="position: relative; top: 80px; left: 90px;">Backup Database:</h3>
                  <input type="submit" name="button" value="DOWNLOAD BACKUP">
                  </fieldset>
            </form>
          </div>
        </div>

        <div class="">
          <?php echo $message; ?>
        </div>
        <div class="con-2">
          <div id="fr2-con">
              <form  method="POST" enctype="multipart/form-data">
                  <fieldset style="width: 350px; height:220px; border: 3px solid #008D96;">
                    <h3 style="position: relative; top: 50px;left: 90px;">Restore Database:</h3>
                    <input class="file" type="file" name="database"/>

                    <input type="submit" name="import" class="btn" value="Import" />
                  </fieldset>
            </form>
          </div>
        </div>
        <div class="btn">
            <a id="btnback" href="index.php">Back</a>
        </div>
    </div>

  </body>
  </html>
