<?php

function login(){
  session_start();

  if($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
    // SET DEFAULT INVALID
    $_SESSION['status'] = 'invalid';
  }

  if($_SESSION['status'] == 'valid'){
    // if valid status go back to the main page.
    // echo "<script>window.location.href = '/Inventory_POS_Pielyn/admin/index.php'</script>";
    pathTo('admin', 'index');
  }

  if (isset($_POST['submit'])) {
    $password = md5($_POST['password']);
    $username = $_POST['username'];

    $login = new login($username, $password);
    $login->addminLogin();
  }
}


function displayBrand(){
  $d = new brand();
  $d->getBrandName();
}

function delete_brand(){
  if(!empty($_GET['delete'])){
    $d = new delete($_GET['delete']);
    if($d->deleteBrand()){
      echo '<div class="txt-addSuccess" ><i class="fas fa-check-circle"></i>Successfully removed<span class="closebtn">&times;</span></div>';
    }else{
      echo "Brand Delete Error!";
    }
  }
}

function displayCategory(){
  $d = new category();

  foreach($d->getCategoryName() as $data){
    echo "<tr>
              <td>$data[category_name]</td>
              <td>
                <a class='update' href='#'>update</a>
                <a class='delete' href='#'>delete</a>
              </td>
          </tr>";
  }
}

function logout(){

  session_start();

  $_SESSION['status'] = 'invalid';
  unset($_SESSION['firstname']);
  unset($_SESSION['lastname']);

  pathTo('admin', 'login');
  // echo "<script>window.location.href = '/Inventory_POS_Pielyn/admin/login.php'</script>";
}

function pathTo($folder, $fileName){
  echo "<script>window.location.href = '/Inventory_POS_Pielyn/$folder/$fileName.php'</script>";
}

function security_session(){
  if(!isset($_SESSION)){
    session_start();
  }
  if($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
    $_SESSION['status'] = 'invalid';
    unset($_SESSION['firstname']);
    unset($_SESSION['lastname']);

    pathTo('admin', 'login');
  }
}
?>
