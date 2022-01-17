<?php
require_once '../php/init.php';
security_session();
error_reporting(0);
$id = $_GET['id'];
$fn = $_GET['fn'];
$ln = $_GET['ls'];
$ps = $_GET['ps'];
$un = $_GET['un'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pielyn Inventory System</title>
    <link rel="icon" href="images/circle-Logo1.png">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/user_update.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  </head>
  <body style="background: #DCDCDC;">
      <?php include '../php/navigation.php'; ?>
      <div class="main-content">


          <div class="account-con">
            <div class="title">
                <h1>Account Setting</h1>
            </div>
                <div class="table-con">
                    <table id="main-tbl">
                        <thead>
                              <th>#</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>User Type</th>
                              <th>Username</th>
                              <th>Password</th>
                              <th></th>
                        </thead>
                        <tbody id="tbl">
                            <?php displayUsers(); add_user(); deleteUser();?>
                        </tbody>
                    </table>
                </div>
                <div class="button-con">

                </div>
          </div>

          <div class="add-update-con">
            <div class="form-con">
                <form class="" action="" method="post">
                      <div id="txt"class="firstName">
                          <label for="">First Name</label><br>
                          <input type="text" name="firstName" required>
                      </div>
                      <div id="txt"class="lastName">
                          <label for="">Last Name</label><br>
                          <input type="text" name="lastName" required>
                      </div>
                      <div id="txt"class="username">
                          <label for="">Username</label><br>
                          <input type="text" name="userName" required>
                      </div>
                      <div id="txt"class="password">
                          <label for="">Password</label><br>
                          <input type="password" name="password" required>
                      </div>
                      <div id="txt"class="userType">
                          <label for="">User Type </label><br>
                          <select class="" name="usersRole" required>
                              <option value="Admin">Admin</option>
                              <option value="Stockman">Stockman</option>
                              <option value="Cashier">Cashier</option>
                          </select>
                      </div>
                      <div class="btn-form">
                          <button id ="bttn" type="submit" name="btn-create">Create</button>

                      </div>
                </form>
            </div>
            <div class="btn">
                <a id="btnback" href="index.php">Back</a>
            </div>

          </div>
      </div>
      <!-- MODAL UPDATE USER -->
      <div class="modal-con">
          <div class="update-con">
              <form class="update-form" action="" method="post">

                <input type="text" hidden name="lbliD" value="<?php echo $id;?>">
                <div id="m-txt"class="firstName">
                    <label for="">First Name</label><br>
                    <input type="text" name="nfirstName" value="<?php echo $fn;?>">
                </div>
                <div id="m-txt"class="lastName">
                    <label for="">Last Name</label><br>
                    <input type="text" name="nlastName" required value="<?php echo $ln;?>">
                </div>
                <div id="m-txt"class="username">
                    <label for="">Username</label><br>
                    <input type="text" name="nuserName" required value="<?php echo $un;?>">
                </div>
                <div id="m-txt"class="password">
                    <label for="">Password</label><br>
                    <input type="password" name="npassword" required>
                </div>
                <!-- <div id="m-txt"class="userType">
                    <label for="">User Type </label><br>
                    <select class="" name="nusersRole">
                      <option value=""></option>
                        <option value="Admin">Admin</option>
                        <option value="Stockman">Stockman</option>
                        <option value="Cashier">Cashier</option>
                    </select>
                </div> -->
                <div class="mbtn-form">
                    <button type="submit" name="ubtn-update">Update</button>
                    <!-- <button id="back"  onclick="back()" type="button" name="mbtn-create">back</button> -->
                    <a id="back" name="" href="user_settings.php">back</a>
                    <?php update_User();?>
                </div>
              </form>
          </div>
      </div>
      <script src="../javascript/update_user.js" charset="utf-8"></script>
  </body>
</html>
