<?php
  class brand extends config
  {
    function getBrandName(){
      $con = $this->con();

      $sql = "SELECT * FROM `brand`";
      $data = $con->prepare($sql);

      $data->execute();
      $rowC = $data->rowCount();
      $result = $data->fetchAll(PDO::FETCH_ASSOC);

      $i = 1;
      foreach ($result as $data) {

        echo "<tr>";
        echo     "<td class='table-num'>$i</td>";
        echo     "<td>$data[brand_name]</td>
                  <td>
                      <a class='update' href='brand.php?update=$data[brand_id]'>update</a>
                      <a class='delete' href='brand.php?delete=$data[brand_id]'>delete</a>
                  </td>
              </tr>";
              $i ++;
      }

    }

  }

 ?>
