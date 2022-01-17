<?php

/**
 *
 */
class search_transacno extends config
{
  public $text;
  function __construct($text)
  {
    $this->text = $text;
  }

  public function textSearch(){
    $con = $this->con();
    $query = "SELECT * FROM cart WHERE transno LIKE '%$this->text%'";
    $sql = $con->prepare($query);
    $sql->execute();

    $rowC = $sql->rowCount();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    if($result){
      foreach ($result as $data) {
        echo "<tr>
                  <td>$data[cashier]</td>
                  <td>$data[transno]</td>
                  <td>$data[pcode]</td>
                  <td>$data[pdesc]</td>
                  <td>$data[qty]</td>
                  <td>$data[total]</td>
                  <td>$data[sdate]</td>
                  <td>$data[time]</td>
              </tr>";
      }
    }else{
      echo   "<tr>
                <td colspan='8' style='font-weight: bold;'>NO DATA FOUND</td>
            </tr>";
    }
  }

  public function getTotalSalesbyTransNo(){
    $con = $this->con();
    $stmt = $con->prepare("SELECT SUM(total) as total FROM cart WHERE transno LIKE '%$this->text%'");

    $stmt->execute();
    $rowC = $stmt->rowCount();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $data) {
        echo "<script>
                document.getElementById('total').innerHTML = $data[total];
              </script>";
    }

  }
}

 ?>
