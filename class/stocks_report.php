<?php


  class stocks_report extends config
  {

    public function getStocksAdded(){
      $con = $this->con();
      $stmt = $con->prepare("SELECT * FROM expiration_date");

      $stmt->execute();
      $rowC = $stmt->rowCount();
      $result = $stmt->fetchALL(PDO::FETCH_ASSOC);

      $i = 0;
      foreach ($result as $data) {
        $i ++;
        echo "<tr style='font-size: 12px'>
                  <td>$i</td>
                  <td>$data[purchase_no]</td>
                  <td>$data[pcode]</td>
                  <td>$data[product_name]</td>
                  <td>$data[item_count]</td>
                  <td>$data[order_receive]</td>
                  <td>$data[added_by]</td>
              </tr>";
      }
    }

    public function getStocksReport(){
      $con = $this->con();
      $stmt = $con->prepare("SELECT * FROM stocks");

      $stmt->execute();
      $rowC = $stmt->rowCount();
      $result = $stmt->fetchALL(PDO::FETCH_ASSOC);

      $i = 0;
      foreach ($result as $data) {
        $i ++;
        echo "<tr style='font-size: 12px'>
                  <td>$i</td>
                  <td>$data[pcode]</td>
                  <td>$data[product_name]</td>
                  <td>$data[reason]</td>
                  <td>$data[old_stock]</td>
                  <td>$data[new_stock]</td>
                  <td>$data[date_change]</td>
                  <td>$data[time_change]</td>
                  <td>$data[username]</td>
              </tr>";
      }
    }
  }

 ?>
