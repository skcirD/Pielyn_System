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

function add_Brand(){
  if(isset($_GET['btn-addBrand']) && empty($_GET['txt-brand'])){
    echo '<div class="txt-error" ><i class="fas fa-check-circle"></i>ERROR! Enter a brand name to add <span class="closebtn">&times;</span></div>';
  }
  if(!empty($_GET['txt-brand'])){
    $brandName = $_GET['txt-brand'];

    $brand = new add($brandName);

    if($brand->addBrand()){
      echo '<div class="txt-addSuccess" ><i class="fas fa-check-circle"></i>Add Successfully <span class="closebtn">&times;</span></div>';
    }else{
      echo "Failed to add new brand";
    }
  }
}

function add_Category(){
  if(isset($_GET['btn-addCategory']) && empty($_GET['txt-category'])){
    echo '<div class="txt-error" ><i class="fas fa-check-circle"></i>ERROR! Enter a category name to add <span class="closebtn">&times;</span></div>';
  }
  if(!empty($_GET['txt-category'])){
    $category = $_GET['txt-category'];

    $category = new add($category);

    if($category->addCategory()){
      echo '<div class="txt-addSuccess" ><i class="fas fa-check-circle"></i>Add Successfully <span class="closebtn">&times;</span></div>';
    }else{
      echo "Failed to add new category";
    }
  }
}


function displayBrand(){
  $d = new brand();
  $d->getBrandName();
}

function displayCategory(){
  $d = new category();
  $d->getCategoryName();
}

function displayProduct(){
  $p = new product();
  $p->getProducts();
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

function delete_category(){
  if(!empty($_GET['delete'])){
    $d = new delete($_GET['delete']);
    if($d->deleteCategory()){
      echo '<div class="txt-addSuccess" ><i class="fas fa-check-circle"></i>Successfully removed<span class="closebtn">&times;</span></div>';
    }else{
      echo "Category Delete Error!";
    }
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
