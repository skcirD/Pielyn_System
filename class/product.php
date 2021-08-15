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
                  <td class='table-price'>$data[price]</td>
                  <td class='table-reOrder'>$data[re_order]</td>
                  <td>
                      <a class='update' href='update_product.php?update=$data[product_id]&pc=$data[pcode]&bc=$data[barcode]&dc=$data[description]&
                                          br=$data[brand]&cat=$data[category]&qty=$data[quantity]&price=$data[price]&rd=$data[re_order]'>update</a>";
        echo         "<a class='delete' onClick='deleteMe($data[product_id])' name='Delete' >delete</a>";
        echo     "</td>
              </tr>";
              $i ++;
      }

    }

  }

 ?>
<script type="text/javascript">
    function deleteMe(delid){
        if(confirm("Do you want to Delete the data?")){
          window.location.href = "product.php?delete="+delid;
          return true;
        }
    }
</script>



 <!-- &barcode=$data[barcode]
 &description=$data[description]&brand=$data[brand]&category=$data[category]&qty=$data[quantity]&price=$data[price]
 &re_order=$data[re_order] -->

        <!-- <input class='delete' type='button' onClick='deleteMe($data[product_id])' name='Delete' value ='Delete'>" -->
