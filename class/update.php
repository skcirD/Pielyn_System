<?php
  class updaate extends config
  {
    public $id, $newBrand;
    function __construct($id, $newBrand)
    {
      $this->id= $id;
      $this->newBrand = $newBrand;    }

    public function updateBrand(){
      $con = $this->con();

      $sql = $con->prepare("UPDATE `brand` SET `brand_name` ='$this->newBrand' WHERE `brand_id` = '$this->id'");

      $data = $sql->execute();

      if($data){
        return true;
      }else{
        return false;
      }
    }
  }


 ?>
