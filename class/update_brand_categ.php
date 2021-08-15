<?php
  class update_brand_categ extends config
  {
      public $id;
      public $newName;

      function __construct($id, $Name)
      {
        $this->id = $id;
        $this->newName = $Name;
      }

      public function updateBrand(){
        $con = $this->con();

        $sql = $con->prepare("UPDATE `brand` SET `brand_name`= '$this->newName' WHERE `brand_id` = '$this->id'");

        $data = $sql->execute();

        if($data){
          return true;
        }else{
          return false;
        }
      }

      public function updateCategory(){
        $con = $this->con();

        $sql = $con->prepare("UPDATE `category` SET `category_name`= '$this->newName' WHERE `category_id` = '$this->id'");

        $data = $sql->execute();

        if($data){
          return true;
        }else{
          return false;
        }
      }
  }
 ?>
