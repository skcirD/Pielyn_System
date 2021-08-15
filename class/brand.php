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
        echo     "<td class='brandName'>$data[brand_name]</td>
                      <td>
                          <a class='update' href='update_brand.php?id=$data[brand_id]&bn=$data[brand_name]'>update</a>
                          <a class='delete' onClick='deleteMe($data[brand_id])'name='Delete'>delete</a>";
        echo          "</td>
            </tr>";
              $i ++;
      }
    }
  }

 ?>
 <script type="text/javascript">
     function deleteMe(delid){
         if(confirm("Do you want to Delete the data?")){
           window.location.href = "brand.php?delete="+delid;
           return true;
         }
     }
 </script>
