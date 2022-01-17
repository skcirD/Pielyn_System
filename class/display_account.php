<?php


class display_account extends config
{
  public function getUsers(){
    $con = $this->con();
    $stmt = $con->prepare("SELECT * FROM users");

    $stmt->execute();
    $rowC = $stmt->rowCount();
    $result = $stmt->fetchALL(PDO::FETCH_ASSOC);

    $i =0;
    foreach ($result as $data) {

      $i++;

      echo "<tr>
                <td>$i</td>
                <td>$data[first_name]</td>
                <td>$data[last_name]</td>
                <td>$data[role]</td>
                <td>$data[username]</td>
                <td>$data[password]</td>
                <td>

                  <a id='update-$i' href='update_user.php?id=$data[id]&fn=$data[first_name]&ls=$data[last_name]&role=$data[role]&ps=$data[password]&un=$data[username]' style='margin-left: 5px;'><img src='images/editing.png' alt='edit.img' style='width:20px; height: 20px;'></a>
                  <a id='action' name'btnDelete' onClick='deleteMe($data[id])'><img src='images/bin.png' alt='delete.img' style='width:20px; height: 20px;'></a>
                </td>
            </tr>";
            // <a class='delete' onClick='deleteMe($data[brand_id])'name='Delete'>delete</a>";
    }
  }
}


 ?>
 <script type="text/javascript">
     function deleteMe(delid){
         if(confirm("Are you sure you want to delete? Click yes to confirm.")){
           window.location.href = "user_settings.php?delete="+delid;
           return true;
         }
     }
 </script>
