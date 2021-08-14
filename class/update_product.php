<?php
  class update_product extends config
  {
      public $id;
      public $newPcode;
      public $newBarcode;
      public $newDescription;
      public $newBrand;
      public $newCategory;
      public $newQty;
      public $newPrice;
      public $newRe_order;
      function __construct($id, $pcode, $barcode, $description, $brand, $category, $qty, $price, $reOrder)
      {
        $this->id = $id;
        $this->newPcode = $pcode;
        $this->newBarcode = $barcode;
        $this->newDescription = $description;
        $this->newBrand = $brand;
        $this->newCategory = $category;
        $this->newQty = $qty;
        $this->newPrice = $price;
        $this->newRe_order = $reOrder;
      }

      public function updateProduct(){
        $con = $this->con();

        $sql = $con->prepare("UPDATE `product` SET `pcode` ='$this->newPcode', `barcode`= '$this->newBarcode', `description`= '$this->newDescription',
          `brand`= '$this->newBrand', `category`= '$this->newCategory', `quantity`= '$this->newQty', `price`= '$this->newPrice', `re_order`= '$this->newRe_order' WHERE `product_id` = '$this->id'");

        $data = $sql->execute();

        if($data){
          return true;
        }else{
          return false;
        }
      }
  }
 ?>
