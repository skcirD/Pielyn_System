<?php
    require_once '../php/init.php';

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Pielyn - Login</title>
   </head>
   <body>
     <form class="lognIn-form" method="post">
       <?php cashier_Login(); ?>
       <div class="">
            <label for="">Username</label>
            <input type="text" name="userName" placeholder="Username">
       </div>

       <div class="">
            <label for="">Password</label>
            <input type="text" name="password" placeholder="Password">
       </div>

       <div class="">
            <button type="submit" name="btn-login">Login</button>
       </div>
     </form>
   </body>
 </html>
