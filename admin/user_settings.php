<?php
require_once '../php/init.php';
security_session();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pielyn Inventory System</title>
    <link rel="icon" href="images/circle-Logo1.png">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/user_settings.css">
    <!-- <link rel="stylesheet" href="../css/index.css"> -->
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
                              <option value="Manager">Manager</option>
                              <option value="Stockman">Stockman</option>
                              <option value="Cashier">Cashier</option>
                          </select>
                      </div>
                      <div class="btn-form">
                          <button id ="bttn" type="submit" name="btn-create">Create</button>
                          <?php ?>
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
              <form class="update-form" action="index.html" method="post">
                <label id="id" name="lbliD"><?php getuserInfo(); ?></label>
                <div id="m-txt"class="firstName">
                    <label for="">First Name</label><br>
                    <input type="text" name="mfirstName" required>
                </div>
                <div id="m-txt"class="lastName">
                    <label for="">Last Name</label><br>
                    <input type="text" name="mlastName" required>
                </div>
                <div id="m-txt"class="username">
                    <label for="">Username</label><br>
                    <input type="text" name="muserName" required>
                </div>
                <div id="m-txt"class="password">
                    <label for="">Password</label><br>
                    <input type="password" name="mpassword" required>
                </div>
                <div id="m-txt"class="userType">
                    <label for="">User Type </label><br>
                    <select class="" name="musersRole" required>
                        <option value="Admin">Admin</option>
                        <option value="Stockman">Stockman</option>
                        <option value="Cashier">Cashier</option>
                    </select>
                </div>
                <div class="mbtn-form">
                    <button type="submit" name="mbtn-update">Update</button>
                    <button id="back"  type="button" name="mbtn-create">back</button>
                    <?php ?>
                </div>
              </form>
          </div>
      </div>
      <script src="../javascript/user_settings.js" charset="utf-8"></script>
  </body>
</html>
