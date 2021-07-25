<?php


  class add extends config
  {
    public $name;
    function __construct($name)
    {
      $this->name = $name;
    }


    function addBrand(){
      $con = $this->con();

      $sql = "INSERT INTO  `brand` (`brand_name`) VALUES ('$this->name')";
      $data = $con->prepare($sql);

      if($data->execute()){
        return true;
      }else{
        return false;
      }
    }


  function addCategory(){
    $con = $this->con();

    $sql = "INSERT INTO  `category` (`category_name`) VALUES ('$this->name')";
    $data = $con->prepare($sql);

    if($data->execute()){
      return true;
    }else{
      return false;
    }
  }
}



  //   function addBrand(){
  //     $con = $this->con();
  //
  //     $sql = "INSERT INTO  `brand` (`brand_name`) VALUES ('$this->name')";
  //     $data = $con->prepare($sql);
  //
  //     if($data->execute()){
  //       return true;
  //     }else{
  //       return false;
  //     }
  //   }
  // }


 ?>
