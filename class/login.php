<?php

  class login extends config{
    public $username;
    public $password;

    public function __construct($username, $password){
      $this->username = $username;
      $this->password = $password;
    }

    public function addminLogin(){
      $con = $this->con();
      // $sql = "SELECT * FROM admin WHERE username=? AND password=?";
      // $data = $con->prepare("SELECT * FROM admin WHERE username=? AND password=?");
      // $data->execute([$username, $password,]);
      // $user = $data->fetch();
      // $total = $data->rowCount();
      $stmt = $con->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
      $stmt->execute([$this->username, $this->password,]);
      $user = $stmt->fetch();
      $total = $stmt->rowCount();

      if ($total >0) {
        session_start();
        $_SESSION['status'] = 'valid';
        $_SESSION['firstname'] = $user['first_name'];
        $_SESSION['lastname'] = $user['last_name'];
        header("Location: index.php");
      }else{
        $_SESSION['status'] = 'invalid';
              echo '<div class="alert">
                <span class="closebtn">&times;</span>
                <strong>Failed!</strong> Check your Username and Password.
              </div>';
      }
    }

    public function cashierLogin(){
      $con = $this->con();
      $sql = $con->prepare("SELECT * FROM cashier WHERE username=? AND password=? ");
      $sql->execute([$this->username, $this->password]);
      $cashier = $sql->fetch();
      $total = $sql->rowCount();

      if($total >0){
          header("Location: pos.php");
      }
      else{
        echo "Failed to login";
      }
    }





  }
?>
