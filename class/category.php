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
        echo "<tr>";
        echo     "<td class='table-num'>$i</td>";
        echo     "<td class='brandName'>$data[category_name]</td>
                      <td>
                          <a class='update' href='update_category.php?id=$data[category_id]&cn=$data[category_name]'>update</a>
                          <a class='delete' onClick='deleteMe($data[category_id])'name='Delete'>delete</a>";
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
           window.location.href = "category.php?delete="+delid;
           return true;
         }
     }
 </script>
