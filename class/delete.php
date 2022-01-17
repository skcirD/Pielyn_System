<?php
class delete extends config
{
  public $id;
  function __construct($id)
  {
    $this->id = $id;
  }

  function deleteUser(){
    $con = $this->con();
    $sql = "DELETE FROM users WHERE id = '$this->id'";
    $query = $con->prepare($sql);

    if($query->execute()){
      return true;
    }else{
      return false;
    }

  }
}
 ?>
