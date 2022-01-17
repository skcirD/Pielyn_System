<?php

/**
 *
 */
class search_transacno_print extends config
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
                  <td>$data[transno]</td>
                  <td>$data[pcode]</td>
                  <td>$data[pdesc]</td>
                  <td>$data[qty]</td>
                  <td>$data[total]</td>

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

  public function getCashierName(){
    $con = $this->con();
    $stmt = $con->prepare("SELECT cashier, transno FROM cart WHERE transno LIKE '%$this->text%'");

    $stmt->execute();
    $rowC = $stmt->rowCount();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $data) {
      echo "<script>
              document.getElementById('cs').innerHTML='$data[cashier]'
              document.getElementById('trans').innerHTML='$data[transno]'
            </script>";
    }

  }
}

 ?>
