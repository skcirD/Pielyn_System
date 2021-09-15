<?php

  class login extends config{
    public $username;
    public $password;
    public $role;

    public function __construct($username, $password, $role){
      $this->username = $username;
      $this->password = $password;
      $this->role = $role;
    }

    public function addminLogin(){
      $con = $this->con();
      // $sql = "SELECT * FROM admin WHERE username=? AND password=?";
      // $data = $con->prepare("SELECT * FROM admin WHERE username=? AND password=?");
      // $data->execute([$username, $password,]);
      // $user = $data->fetch();
      // $total = $data->rowCount();
      $stmt = $con->prepare("SELECT * FROM admin WHERE username = ? AND password = ? AND users_role = ?");
      $stmt->execute([$this->username, $this->password, $this->role]);
      $user = $stmt->fetch();
      $total = $stmt->rowCount();

      if ($total >0 ) {
        $_SESSION['status'] = 'valid';
        $_SESSION['firstname'] = $user['first_name'];
        $_SESSION['lastname'] = $user['last_name'];
        $_SESSION['role'] = $user['users_role'];
        if($_SESSION['role'] == "Admin"){
          header("Location: index.php");
        }
        else if($_SESSION['role'] == "Cashier"){
          echo "<script>window.location.href = '/Inventory_POS_Pielyn/cashier/pos.php'</script>";
        }


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
