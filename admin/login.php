<?php
require_once '../php/init.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pielyn Login</title>
    <link rel="icon" href="images/circle-Logo1.png">
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body>
      <section>
        <div class="logo">
          <img src="images/Logo1.png" alt="logo">
        </div>
        <div class="contentBx">
          <div class="form-con">
            <h2>Login</h2>
            <form class="" method="post">
              <div class="inputBx">
                <?php login(); ?>
                <span>Username</span>
                <input type="text" name="username">
              </div>
              <div class="inputBx">
                <span>Password</span>
                <input type="password" name="password">
              </div>
              <div class="forgotPass">
                <a href="#">Forgot Password</a>
              </div>
              <div class="inputBx">
                <input type="submit" name="submit" value="Sign in">
              </div>
            </form>
          </div>
        </div>
      </section>
  </body>
</html>
