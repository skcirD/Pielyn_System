<?php

/**
 *
 */
class slow_moving extends config
{

  function getSlowmoving(){
    $con = $this->con();
    $stmt= $con->prepare("SELECT pcode, pdesc, price, sum(qty) as total_stock_sold, SUM(total) as total_price_sold
                            from cart WHERE status='Sold' GROUP BY pcode ORDER BY total_stock_sold ASC");
    $stmt->execute();
    $rowC = $stmt->rowCount();
    $result = $stmt->fetchALL(PDO::FETCH_ASSOC);

    $i = 0;
    foreach ($result as $data) {
      $i++;
      echo "<tr>
                <td>$i</td>
                <td>$data[pcode]</td>
                <td id='pname'>$data[pdesc]</td>
                <td>$data[price]</td>
                <td id='soldqty'>$data[total_stock_sold]</td>
                <td>$data[total_price_sold]</td>
            </tr>";
    }

  }
}

 ?>
