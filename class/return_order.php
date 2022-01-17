<?php


class return_order extends config
{

  public function getReturnOrder(){
    $con = $this->con();
    $stmt = $con->prepare("SELECT * FROM purchase_order WHERE status ='BACK-ORDER'");

    $stmt->execute();
    $rowC = $stmt->rowCount();
    $result = $stmt->fetchALL(PDO::FETCH_ASSOC);

    $i =0;
    foreach ($result as $data) {

      $i++;

      echo "<tr>
                <td>$i</td>
                <td>$data[product_name]</td>
                <td>$data[supplier_name]</td>
                <td>$data[qty]</td>
                <td>$data[total]</td>
                <td>$data[date]</td>
                <td>$data[order_time]</td>
                <td>$data[order_receive]</td>
                <td>$data[status]</td>
                <td>$data[purchase_no]</td>
                <td>$data[order_by]</td>
            </tr>";
    }
  }
}


 ?>
