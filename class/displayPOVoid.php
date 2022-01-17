<?php

/**
 *
 */
class displayPOVoid extends config
{
  public function getPOVoidReport(){
    $con = $this->con();
    $stmt = $con->prepare("SELECT * FROM po_void");

    $stmt->execute();
    $rowC = $stmt->rowCount();
    $result = $stmt->fetchALL(PDO::FETCH_ASSOC);

    $i =0;
    foreach ($result as $data) {

      $i++;

      echo "<tr>
                <td>$i</td>
                <td>$data[purchase_no]</td>
                <td>$data[pcode]</td>
                <td>$data[product_name]</td>
                <td>$data[supplier_name]</td>
                <td>$data[quantity]</td>
                <td>$data[total]</td>
                <td>$data[voidby]</td>
                <td>$data[delivery_date]</td>
                <td>$data[void_date]</td>
            </tr>";
    }
  }

}

 ?>
