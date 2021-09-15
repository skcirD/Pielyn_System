<?php

  class pos_search_product extends config
  {
    public $search;
    function __construct($search)
    {
        $this->search = $search;
    }

    function searchP(){
      $con = $this->con();
      $stmt = $con->prepare("SELECT * FROM `product` WHERE `barcode` LIKE '%$this->search%' OR `description` LIKE '%$this->search%'") or die("could not search!");
      $stmt->execute();
      $rowC = $stmt->rowCount();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      if($rowC == 0){
        return  false;
      }else {
        return $result;
      }
    }

  }


 ?>
