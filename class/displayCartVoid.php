<?php

/**
 *
 */
class displayCartVoid extends config
{
  public function getCartVoidReport(){
    $con = $this->con();
    $stmt = $con->prepare("SELECT * FROM cart_void");

    $stmt->execute();
    $rowC = $stmt->rowCount();
    $result = $stmt->fetchALL(PDO::FETCH_ASSOC);

    $i =0;
    foreach ($result as $data) {

      $i++;

      echo "<tr>
                <td>$i</td>
                <td>$data[transno]</td>
                <td>$data[trans_date]</td>
                <td>$data[pcode]</td>
                <td>$data[pdesc]</td>
                <td>$data[price]</td>
                <td>$data[qty]</td>
                <td>$data[total]</td>
                <td>$data[void_by]</td>
            </tr>";
    }
  }

}

 ?>
