<?php

  class login extends config{
    public $username;
    public $password;
    // public $role;

    public function __construct($username, $password){
      $this->username = $username;
      $this->password = $password;
      // $this->role = $role;
    }

    public function addminLogin(){
      $con = $this->con();
      // $sql = "SELECT * FROM admin WHERE username=? AND password=?";
      // $data = $con->prepare("SELECT * FROM admin WHERE username=? AND password=?");
      // $data->execute([$username, $password,]);
      // $user = $data->fetch();
      // $total = $data->rowCount();
      $stmt = $con->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
      $stmt->execute([$this->username, $this->password]);
      $user = $stmt->fetch();
      $total = $stmt->rowCount();

      if ($total >0 ) {
        $_SESSION['status'] = 'valid';
        $_SESSION['firstname'] = $user['first_name'];
        $_SESSION['lastname'] = $user['last_name'];
        $_SESSION['role'] = $user['role'];

        // if ($_SESSION['role'] == "Admin") {
        //   header("Location: index.php");
        // }else {
        //   echo "<script>alert('Wrong Password or Username!')</script>";
        // }

        if($_SESSION['role'] == "Manager"){
          header("Location: index.php");
        }
        elseif ($_SESSION['role'] == "Cashier") {
          $_SESSION['status'] = 'invalid';
          echo "<a id='inc' style='color:red;display: block;background: white;padding: 5px;border-radius: 5px;margin-bottom: 13px;'>Incorrect Username or Password.</a>";
        }
        elseif ($_SESSION['role'] == "Stockman") {
          $_SESSION['status'] = 'invalid';
          echo "<a id='inc' style='color:red;display: block;background: white;padding: 5px;border-radius: 5px;margin-bottom: 13px;'>Incorrect Username or Password.</a>";
        }
        // else if($_SESSION['role'] == "Cashier" || $_SESSION['role'] == "Stockman"){
        //   echo "<script>alert('Wrong Password or Username!')</script>";
        // }


      }else{
        $_SESSION['status'] = 'invalid';
        echo "<a id='inc' style='color:red;display: block;background: white;padding: 5px;border-radius: 5px;margin-bottom: 13px;'>Incorrect Username or Password.</a>";
              // echo '<div class="alert">
              //   <span class="closebtn">&times;</span>
              //   <strong>Failed!</strong> Check your Username and Password.
              // </div>';
      }

    }


  }
?>
