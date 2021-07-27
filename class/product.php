<?php
  class product extends config
  {
    function getProducts(){
      $con = $this->con();

      $sql = "SELECT * FROM `product`";
      $data = $con->prepare($sql);

      $data->execute();
      $rowC = $data->rowCount();
      $result = $data->fetchAll(PDO::FETCH_ASSOC);

      $i = 1;
      foreach ($result as $data) {

        echo "<tr>";
        echo     "<td class='table-num'>$i</td>";
        echo     "<td class='table-pcode'>$data[pcode]</td>
                  <td class='table-barcode'>$data[barcode]</td>
                  <td class='table-description'>$data[description]</td>
                  <td class='table-brand'>$data[brand]</td>
                  <td class='table-category'>$data[category]</td>
                  <td class='table-qty'>$data[quantity]</td>
                  <td class='table-price'>$data[price].00</td>
                  <td class='table-reOrder'>$data[re_order]</td>
                  <td>
                      <a class='update' href='product.php?update=$data[product_id]'>update</a>
                      <a class='delete' href='product.php?delete=$data[product_id]'>delete</a>
                  </td>
              </tr>";
              $i ++;
      }

    }

  }

 ?>
