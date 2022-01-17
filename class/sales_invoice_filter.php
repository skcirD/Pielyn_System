<?php

  /**
   *
   */
  class sales_invoice_filter extends config
  {
    public $sdate, $edate;

    function __construct($sdate, $edate)
    {
      $this->sdate = $sdate;
      $this->edate = $edate;
    }

    public function getSalesInvoiceByFilter(){
      $con = $this->con();
      $stmt = $con->prepare("SELECT * FROM cart WHERE status='Sold' AND sdate BETWEEN '$this->sdate' and '$this->edate' ORDER BY sdate");

      $stmt->execute();
      $rowC = $stmt->rowCount();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
    }

    public function getTotalSalesByFilter(){
      $con = $this->con();
      $stmt = $con->prepare("SELECT SUM(total) as total FROM cart WHERE status='Sold' AND sdate BETWEEN '$this->sdate' and '$this->edate' ORDER BY sdate");

      $stmt->execute();
      $rowC = $stmt->rowCount();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      foreach ($result as $data) {
          echo "<script>
                  document.getElementById('total').innerHTML = $data[total];
                </script>";
      }
    }

    public function getDAilySalesAndTotal(){

      $con = $this->con();
      $stmt = $con->prepare("SELECT * FROM cart WHERE status='Sold' AND sdate BETWEEN GETDATE() and GETDATE() ORDER BY sdate");
      $stmt->execute();
      $rowC = $stmt->rowCount();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

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

      // $stm2 = $con->prepare("SELECT SUM(total) as total FROM cart WHERE status='Sold' AND sdate BETWEEN '$this->date1' and '$this->date2' ORDER BY sdate");
      // $stmt2->execute();
      // $rowC2 = $stm2t->rowCount();
      // $result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
      //
      // foreach ($result2 as $data) {
      //     echo "<script>
      //             document.getElementById('total').innerHTML = $data[total];
      //           </script>";
      // }
    }
}
 ?>
