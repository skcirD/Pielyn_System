<?php
  class categBrand extends config
  {
    function getCategory(){
      $con = $this->con();

      $sql = "SELECT * FROM `category`";
      $data = $con->prepare($sql);

      if($data->execute()){
        $result = $data->fetchAll(PDO::FETCH_ASSOC);

        return $result;
      }
    }

    function getBrand(){
      $con = $this->con();

      $sql = "SELECT * FROM `brand`";
      $data = $con->prepare($sql);

      if($data->execute()){
        $result = $data->fetchAll(PDO::FETCH_ASSOC);

        return $result;
      }
    }
  }
 ?>
