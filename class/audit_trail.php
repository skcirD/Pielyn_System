<?php


  class audit_trail extends config
  {

    public function displayAuditTrail(){
      $con = $this->con();
      $stmt = $con->prepare("SELECT * FROM audit_trail ORDER BY  id DESC");

      $stmt->execute();
      $rowC = $stmt->rowCount();
      $result = $stmt->fetchALL(PDO::FETCH_ASSOC);

      $i = 0;
      foreach ($result as $data) {
        $i ++;
        echo "<tr style='font-size: 10px;'>
                  <td>$i</td>
                  <td>$data[user_fullname]</td>
                  <td>$data[user_role]</td>
                  <td>$data[logdate]</td>
                  <td>$data[time_in]</td>
                  <td>$data[time_out]</td>
              </tr>";
      }
    }
  }

 ?>
