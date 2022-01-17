<?php

  class create_account extends config
  {
    public $username;
    public $password;
    public $firstname;
    public $lastname;
    public $usersRole;

    function __construct($username, $password, $firstname, $lastname, $usersRole)
    {
      $this->username = $username;
      $this->password = $password;
      $this->firstname = $firstname;
      $this->lastname = $lastname;
      $this->usersRole = $usersRole;
    }

    public function createAccount(){
      $con = $this->con();

      $sql = $con->prepare("INSERT INTO `users` (`first_name`, `last_name`, `username`, `password`, `role`) VALUES
      ('$this->firstname', '$this->lastname', '$this->username', '$this->password', '$this->usersRole')");

      if($sql->execute()){
        return true;
      }else{
        return false;
      }
    }
  }

 ?>
