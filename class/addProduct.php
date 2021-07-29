<?php
  class addproduct extends config
  {
    public $pcode;
    public $barcode;
    public $description;
    public $brand;
    public $category;
    public $qty;
    public $price;
    public $reOrder;


    function __construct($pcode, $barcode, $description, $brand, $category, $qty, $price, $reOrder)
    {
      $this->pcode = $pcode;
      $this->barcode = $barcode;
      $this->description = $description;
      $this->brand = $brand;
      $this->category = $category;
      $this->qty = $qty;
      $this->price = $price;
      $this->reOrder = $reOrder;
    }

    function addProduct(){
      $con = $this->con();

      $sql = $con->prepare("INSERT INTO `product` (`pcode`, `barcode`, `description`, `brand`, `category`, `quantity`, `price`, `re_order`) VALUES
       ('$this->pcode', '$this->barcode', '$this->description', '$this->brand', '$this->category', '$this->qty', '$this->price', '$this->reOrder')");

      if($sql->execute()){
        return true;
      }else{
        return false;
      }
    }

  }



 ?>
