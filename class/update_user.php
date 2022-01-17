<?php
/**
 *
 */
class update_user extends config
{
  public $id;
  public $fn;
  public $ln ;
  public $un;
  public $pass;


  function __construct($id, $fn, $ln, $un, $pass)
  {
    $this->id = $id;
    $this->fn = $fn;
    $this->ln = $ln;
    $this->un = $un;
    $this->pass = $pass;
  }

  public function updateUser(){
    $con = $this->con();

    $sql = $con->prepare("UPDATE `users` SET `first_name` = '$this->fn', `last_name`='$this->ln', `username`='$this->un', `password`='$this->pass' WHERE `id`='$this->id'");

    $data = $sql->execute();
    if($data){
      return true;
    }else {
      return false;
    }
  }

}


 ?>
