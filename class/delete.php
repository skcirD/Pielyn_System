<?php
  /**
   *
   */
  class delete extends config
  {
    public $id;
    public function __construct($id)
    {
      $this->id = $id;
    }

    public function deleteBrand(){
      $con = $this->con();
      $sql = "DELETE FROM `brand` WHERE `brand_id` = $this->id";
      $data = $con->prepare($sql);

      if($data->execute()){
        return true;
      }else{
        return false;
      }
    }

    public function deleteCategory(){
      $con = $this->con();

      $sql = "DELETE FROM `category` WHERE `category_id` = $this->id";
      $data = $con->prepare($sql);

      if($data->execute()){
        return true;
      }else {
        return false;
      }
    }

    public function deleteProduct(){
      $con = $this->con();

      $sql = $con->prepare("DELETE FROM `product` WHERE `product_id` = $this->id");
      $data = $sql->execute();

      if($data){
        return true;
      }else{
        return false;
      }
    }
  }

 ?>
