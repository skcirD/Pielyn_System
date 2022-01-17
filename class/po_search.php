<?php

/**
 *
 */
class po_search extends config
{
  public $text;

  function __construct($text)
  {
    $this->text = $text;
  }

  function textSearch(){
    $con = $this->con();
    $query = "SELECT * FROM purchase_order WHERE purchase_no LIKE '%$this->text%'AND new_status='ADDED'";

    $sql = $con->prepare($query);
    $sql->execute();

    $rowC = $sql->rowCount();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    if($result){

      $i =0;
      foreach ($result as $data) {

        $i++;

        echo "<tr>
                  <td>$i</td>
                  <td>$data[product_name]</td>
                  <td>$data[supplier_name]</td>
                  <td>$data[total]</td>
                  <td>$data[date]</td>
                  <td>$data[order_time]</td>
                  <td>$data[order_receive]</td>
                  <td>$data[new_status]</td>
                  <td>$data[purchase_no]</td>
                  <td>$data[order_by]</td>
              </tr>";
      }
    }else{
      echo   "<tr>
                <td colspan='10' style='font-weight: bold;'>NO DATA FOUND</td>
            </tr>";
    }
  }
}


 ?>
