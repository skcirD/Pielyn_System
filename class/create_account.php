<?php

  class create_account extends config
  {
    public $username;
    public $password;
    public $firstname;
    public $lastname;

    function __construct($username, $password, $firstname, $lastname)
    {
      $this->username = $username;
      $this->password = $password;
      $this->firstname = $firstname;
      $this->lastname = $lastname;
    }

    public function createAccount(){
      $con = $this->con();

      $sql = $con->prepare("INSERT INTO `admin` (`first_name`, `last_name`, `username`, `password`) VALUES
      ('$this->firstname', '$this->lastname', '$this->username', '$this->password')");

      $data = $sql->execute();

      if($data){
        return true;
      }else{
        return false;
      }
    }
  }

 ?>
