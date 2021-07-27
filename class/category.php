<?php

  class category extends config
  {
    //function to get category name in database pielyn_db
    function getCategoryName()
    {
      $con = $this->con();
      $sql = "SELECT * FROM `category`";
      $data = $con->prepare($sql);
      $data->execute();
      $result = $data->fetchAll(PDO::FETCH_ASSOC);

      $i = 1;
      foreach($result as $data){
        echo "<tr>
                  <td class='table-num'>$i</td>
                  <td>$data[category_name]</td>
                  <td>
                    <a class='update' href='category.php?update=$data[category_id]'>update</a>
                    <a class='delete' href='category.php?delete=$data[category_id]'>delete</a>
                  </td>
              </tr>";
              $i++;
      }
    }
  }

 ?>
