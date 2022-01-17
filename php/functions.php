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
    // $role = $_POST['userRole'];


    $login = new login($username, $password);
    $login->addminLogin();
  }
}

// ADD NEW USER, ADMIN and cashier
function add_user(){
  if(isset($_POST['btn-create'])){
    $username = $_POST['userName'];
    $password = md5($_POST['password']);
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $usersRole = $_POST['usersRole'];

    $user = new create_account($username, $password, $firstname, $lastname, $usersRole);
      if($user->createAccount()){
        displayUsers();
      }else {
        echo "FAILED";
      }
    }
  }


function displayAuditT(){
  $d = new audit_trail();
  $d->displayAuditTrail();
}

function displayStocksReport(){
  $d = new stocks_report();
  $d->getStocksReport();
}

function displayStocks_Added(){
  $d = new stocks_report();
  $d->getStocksAdded();
}

function displayUsers(){
  echo "<script>
            document.getElementById('tbl').innerHTML='';
        </script>";
  $d = new display_account();
  $d->getUsers();
}

function displayPurchaseOrderReport(){
  $d = new purchase_report();
  $d->getPurchaseOrder();
}

function displayReturnOrderReport(){
  $d = new return_order();
  $d->getReturnOrder();
}

function displaySummarySales(){
  $d = new sales_invoice();
  $d->getSummarySales();
}

function displayTotalSales(){
  $d = new sales_invoice();
  $d->getTotalSales();
}

function displaySlowMoving(){
  $d = new slow_moving();
  $d->getSlowmoving();
}

function displayFastMoving(){
  $d = new fast_moving();
  $d->getFastMoving();
}

function displaySalesByDate(){
  if(isset($_GET['btnSubmit']))
  {
    $sdate = $_GET['sdate'];
    $edate = $_GET['edate'];

    $sdateNew = date("m/d/Y", strtotime($sdate));
    $edateNew = date("m/d/Y", strtotime($edate));

      // echo "<script>
      //           document.getElementById('tbl').innerHTML='';
      //       </script>";
      // $d = new sales_invoice_filter($sdateNew, $edateNew);
      // $d->getSalesInvoiceByFilter();
      // $d->getTotalSalesByFilter();

    if($sdate == "" && $edate == ""){
      return;
    }else{
      echo "<script>
                document.getElementById('tbl').innerHTML='';
            </script>";
      $d = new sales_invoice_filter($sdateNew, $edateNew);
      $d->getSalesInvoiceByFilter();
      $d->getTotalSalesByFilter();
    }
  }
}

function displaySsalesAndtotal(){
  if(isset($_POST['btnSummary'])) {
      echo "<script>
                document.getElementById('tbl').innerHTML='';
            </script>";
      $d = new sales_invoice();
      $d->getSummarySales();
      echo "<script>
                window.location.href='sales_invoice.php';
            </script>";
      $s = new sales_invoice();
      $s->getTotalSales();
  }
}

function displayDAilySales(){
  $date1 = date("Y-m-d");
  $date2 = date("Y-m-d");


  if(isset($_POST['btnDSales'])){
    echo "<script>
              document.getElementById('tbl').innerHTML='';
          </script>";
    // $s = new sales_invoice_filter($date1, $date2);
    // $s->getDAilySalesAndTotal();
  }
}

function displayCartVoid(){
  $s = new displayCartVoid();
  $s->getCartVoidReport();
}

function displayPOVoid(){
  $s = new displayPOVoid();
  $s->getPOVoidReport();
}


function deleteUser(){
  if(!empty($_GET['delete'])){
    $d = new delete($_GET['delete']);
    ;
    if($d->deleteUser()){
      displayUsers();
    }
  }
}


function update_User(){
  if(isset($_POST['ubtn-update'])){
    $id = $_POST['lbliD'];
    $fn = $_POST['nfirstName'];
    $ln = $_POST['nlastName'];
    $un = $_POST['nuserName'];
    $pass = md5($_POST['npassword']);

    $n = new update_user($id, $fn, $ln, $un, $pass);
    if($n->updateUser()){
      echo "<script>window.location.href='user_settings.php'</script>";

    }else{
      echo "<script>alert('UPDATE FAILED!')</script>";
    }

  }
}

function searchByTransacstionNo(){
  if(isset($_GET['search'])){
    $text = $_GET['search'];
    echo "<script>
              document.getElementById('tbl').innerHTML='';
          </script>";

    $s = new search_transacno($text);
    $s->textSearch();
    $s->getTotalSalesbyTransNo();
  }
}

function searchByTransacstionNo_print(){
  if(isset($_GET['search'])){
    $text = $_GET['search'];

    echo "<script>
              document.getElementById('tbl').innerHTML='';
          </script>";

    $s = new search_transacno_print($text);
    $s->textSearch();
    $s->getTotalSalesbyTransNo();
    $s->getCashierName();
  }
}

function printTSales(){
    if(isset($_POST['btnPrint'])){
      $text = $_GET['search'];
      //  searchByTransacstionNo();
      echo "<script>window.location.href='sales_invoice_print.php?search=".$text."'</script>";
    }
}


function searchPurchaseOrder(){
  if(isset($_GET['search'])){
    $text = $_GET['search'];

    echo "<script>
              document.getElementById('tbl').innerHTML='';
          </script>";

          $s = new po_search($text);
          $s->textSearch();
          // $s->getTotalSalesbyTransNo();
  }
}

function printPO(){
    if(isset($_POST['btnPrint'])){
      $text = $_GET['search'];
      //  searchByTransacstionNo();
      echo "<script>window.location.href='purchase_order_print.php?search=".$text."'</script>";
    }
}



function printBO(){
  if(isset($_POST['print'])){
    $text = $_GET['search'];
    echo "<script>window.location.href='return_order_print.php?search=".$text."'</script>";
  }
}


function searchBO(){
  if(isset($_GET['search'])){
    $text = $_GET['search'];

    echo "<script>
              document.getElementById('tbl').innerHTML='';
          </script>";

          $s = new search_BO($text);
          $s->textSearch();
  }
}

function print_stocksR(){
  if(isset($_POST['print'])){
    echo "<script>window.location.href='stocks_added_print.php'</script>";
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
  if($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
    $_SESSION['status'] = 'invalid';
    unset($_SESSION['firstname']);
    unset($_SESSION['lastname']);

    pathTo('admin', 'login');
  }
}


?>
