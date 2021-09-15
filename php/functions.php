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
    $role = $_POST['userRole'];


    $login = new login($username, $password, $role);
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
      echo "<script>alert('Brand successfully Added ')</script>";
    }
  }
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
      echo "<script>alert('Category successfully Added')</script>";
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
        echo '<script>alert("Successfuly added Product.")</script>';
      }
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

// DISPLAY ALL CATEGORY IN Dropdownlist and display selected value in update dropdownlist
function display_categ_option(){
  $categName = $_GET['cat'];
  $categ = new categBrand();

  echo "<option value=''>Select a Category</option>";
  foreach ($categ->getCategory() as $data) {
    echo "<option value='$data[category_name]'";
          if($categName == $data['category_name'])
          {
            echo "selected";
          }
    echo ">$data[category_name]</option>";
  }
}

//Display all brand in Dropdownlist and display selected value in update dropdownlist
function display_brand_option(){
  $brandName = $_GET['br'];
  $categ = new categBrand();
  $result = $categ->getBrand();

  echo "<option value=''>Select a Brand</option>";
  foreach ($result as $data) {
    echo "<option value='$data[brand_name]'";
        if ($brandName == $data['brand_name']) {
          echo "selected";
        }
    echo">$data[brand_name]</option>";
  }
}

function updateProduct(){
  if (isset($_GET['btnUpdate'])) {
    $id = $_GET['productId'];
    $Pcode = $_GET['pcode'];
    $Barcode = $_GET['barcode'];
    $Description = $_GET['description'];
    $Brand = $_GET['select-brand'];
    $Category = $_GET['select-category'];
    $Qty = $_GET['qty'];
    $Price = $_GET['price'];
    $Re_order = $_GET['reOrder'];

    $product = new update_product($id, $Pcode, $Barcode, $Description, $Brand, $Category, $Qty, $Price, $Re_order);

    $product->updateProduct();
    if($product){
      echo "<script>alert('Product has been successfully Updated')</script>";
      pathTo('admin', 'product');

    }else {
      echo "<script>alert('Failed to update Product')</script>";
      pathTo('admin', 'product');
    }
  }
}

function updateBrand(){
  if (isset($_GET['btnUpdate'])) {
    $id = $_GET['brandId'];
    $newbrand = $_GET['brand'];

    $brand = new update_brand_categ($id, $newbrand);

    $brand->updateBrand();
    if($brand){
      echo "<script>alert('Brand has been successfully Updated')</script>";
      pathTo('admin', 'brand');

    }else {
      echo "<script>alert('Failed to update Brand')</script>";
      pathTo('admin', 'brand');
    }
  }
}

function updateCategory(){
  if (isset($_GET['btnUpdate'])) {
    $id = $_GET['categoryId'];
    $newCategory = $_GET['category'];

    $category = new update_brand_categ($id, $newCategory);

    $category->updateCategory();
    if($category){
      echo "<script>alert('Category has been successfully Updated')</script>";
      pathTo('admin', 'category');

    }else {
      echo "<script>alert('Failed to update Category')</script>";
      pathTo('admin', 'category');
    }
  }
}

// DELETE BRAND ON TABLE
function delete_brand(){
  if(!empty($_GET['delete'])){
    $d = new delete($_GET['delete']);
    $d->deleteBrand();
  }
}

// DELETE CATEGORY ON NTABLE
function delete_category(){
  if(!empty($_GET['delete'])){
    $d = new delete($_GET['delete']);
    $d->deleteCategory();
  }
}
// DELETE PRODUCT
function delete_product(){
  if(!empty($_GET['delete'])){
    $delete = new delete($_GET['delete']);
    $delete->deleteProduct();
  }
}

// BACK IN LOGIN FORM
function logout(){
  session_start();

  $_SESSION['status'] = 'invalid';
  unset($_SESSION['firstname']);
  unset($_SESSION['lastname']);
  unset($_SESSION['role']);

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
  if($_SESSION['status'] == 'invalid' || empty($_SESSION['status']) || $_SESSION['role'] != "Admin"){
    $_SESSION['status'] = 'invalid';
    unset($_SESSION['firstname']);
    unset($_SESSION['lastname']);

    pathTo('admin', 'login');
  }
}







###########################################################CASHIER FUNCTIONS#####################################################

function searchProduct(){
  if(isset($_POST['txt-searchBar'])){
     $searchq = $_POST['txt-searchBar'];
     $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

     $search = new pos_search_product($searchq);

     if($search->searchP()){
       foreach ($search->searchP() as $data) {
         echo "<tr>";
         echo     "<td>$data[barcode]</td>
                   <td>$data[description]</td>
                   <td>$data[price]</td>
                   <td>$data[quantity]</td>";
         echo "</tr>";
       }
     }else{
       echo "<script>
         document.querySelector('.txt-search').style.innerHTML = 'Not Found'
       </script>";
     }
   }
}



?>
