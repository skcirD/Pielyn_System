<?php

function login(){
  session_start();
// $_SESSION['status'] == 'invalid' ||
  if(empty($_SESSION['status'])){
    // SET DEFAULT INVALID
    $_SESSION['status'] = 'invalid';
  }

  if($_SESSION['status'] == 'valid'){
    // if valid status go back to the main page.
    pathTo('admin', 'index');
  }

  if (isset($_POST['submit'])) {
    $password = md5($_POST['password']);
    $username = $_POST['username'];

    $login = new login($username, $password);
    $login->addminLogin();
  }
}

// ADD NEW BRAND
function add_Brand(){
  if(isset($_GET['btn-addBrand']) && empty($_GET['txt-brand'])){
    echo '<div class="txt-error" ><i class="fas fa-check-circle"></i>ERROR! Enter a brand name to add <span class="closebtn">&times;</span></div>';
  }
  else if(isset($_GET['btn-addBrand']) && !empty($_GET['txt-brand'])){
    $brandName = $_GET['txt-brand'];

    $brand = new add($brandName);

    if($brand->addBrand()){
      echo '<div class="txt-addSuccess" ><i class="fas fa-check-circle"></i>Add Successfully <span class="closebtn">&times;</span></div>';
    }else{
      echo "Failed to add new brand";
    }
  }
  // else if(isset($_GET['btn-updateBrand']) && empty($_GET['txt-brand'])){
  //   echo '<div class="txt-error" ><i class="fas fa-check-circle"></i>ERROR! Enter a brand name to add <span class="closebtn">&times;</span></div>';
  // }
  // else if(isset($_GET['btn-updateBrand']) && !empty($_GET['txt-brand'])){
  //   $b = $_GET['txt-brand'];
  //   echo '<div class="txt-addSuccess" ><i class="fas fa-check-circle"></i>Add Successfully <span class="closebtn">&times;</span></div>';
  // }
}

// UPDATE BRAND

// ADD NEW CATEGORY
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

// ADD NEW PRODUCT
function add_Product(){
  if(isset($_GET['btn-addProduct'])){
    if(!empty($_GET['txt-pcode']) && !empty($_GET['txt-description']) &&
    $_GET['select-brand'] != null && $_GET['select-category'] != null && !empty($_GET['txt-qty']) &&
    !empty($_GET['txt-price']) && !empty($_GET['txt-reOrder']))
    {
      $pcode = $_GET['txt-pcode'];
      $barcode = $_GET['txt-barcode'];
      $description = $_GET['txt-description'];
      $brand = $_GET['select-brand'];
      $category = $_GET['select-category'];
      $qty = $_GET['txt-qty'];
      $price = $_GET['txt-price'];
      $reOrder = $_GET['txt-reOrder'];

      $product = new addProduct($pcode, $barcode, $description, $brand, $category, $qty, $price, $reOrder);

      if($product->addProduct()){
        // echo '<div class="txt-addSuccess" ><i class="fas fa-check-circle"></i>Add  Product Successfully <span class="closebtn">&times;</span></div>';
        echo '<script>alert("Successfuly added Product.")</script>';
      }
    }else{
        echo '<div class="txt-error" ><i class="fas fa-check-circle"></i>ERROR! Incomplete product information <span class="closebtn">&times;</span></div>';
        // echo '<script>alert("Failed to add Product.")</script>';
    }
  }
}

// ADD NEW USER, ADMIN and cashier
function add_user(){
  if(isset($_POST['btn-create'])){
    $username = $_POST['userName'];
    $password = md5($_POST['password']);
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];

    if(!empty($username) && !empty($password) && !empty($firstname) && !empty($lastname)){
      $user = new create_account($username, $password, $firstname, $lastname);
      $user->createAccount();
      echo "Successfully add account";
    }
    else{
      echo "PLEASE FILL UP THE BLANKS";
    }

  }
}

// DISPLAY BRAND IN TABLE
function displayBrand(){
  $d = new brand();
  $d->getBrandName();
}

// DISPLAY CATEGORY ON TABLE
function displayCategory(){
  $d = new category();
  $d->getCategoryName();
}

// DISPLAY PRODUCTS ON TABLE
function displayProduct(){
  $p = new product();
  $p->getProducts();
}

// DISPLAY ALL CATEGORY IN Dropdownlist
function display_categ_option(){
  $categ = new categBrand();

  foreach ($categ->getCategory() as $data) {
    echo "<option >$data[category_name]</option>";
  }
}

//Display all brand in Dropdownlist
function display_brand_option(){
  $categ = new categBrand();
  $result = $categ->getBrand();
  foreach ($result as $data) {
    echo "<option >$data[brand_name]</option>";
  }
}

// DELETE BRAND ON TABLE
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

// DELETE CATEGORY ON NTABLE
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
// DELETE PRODUCT
function delete_product(){
  if(!empty($_GET['delete'])){
    $delete = new delete($_GET['delete']);

    if($delete->deleteProduct()){
      // echo '<div class="txt-addSuccess" ><i class="fas fa-check-circle"></i>Successfully removed<span class="closebtn">&times;</span></div>';
      echo '<script>alert("Deleted Successfuly")</script>';
    }
  }
}

// BACK IN LOGIN FORM
function logout(){
  session_start();

  $_SESSION['status'] = 'invalid';
  unset($_SESSION['firstname']);
  unset($_SESSION['lastname']);

  pathTo('admin', 'login');
}

// HEADER - LOCATION FILE
function pathTo($folder, $fileName){
  echo "<script>window.location.href = '/Inventory_POS_Pielyn/$folder/$fileName.php'</script>";
}

// IF STATUS IS INVALID STAY IN LOGIN FORM
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







###########################################################CASHIER FUNCTIONS#####################################################

function cashier_Login(){
  if(isset($_POST['btn-login'])){
    $username = $_POST['userName'];
    $password = md5($_POST['password']);

    $cashier = new login($username, $password);
    $cashier->cashierLogin();
  }
}


?>
