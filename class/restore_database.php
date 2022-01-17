<?php

/**
 *
 */
// class restore_database extends config
// {
//   public $dbHost     = 'localhost';
//   public $dbUsername = 'root';
//   public $dbPassword = '';
//   public $dbName;
//   public $filePath;
//
//   function __construct($dbName, $filePath)
//   {
//     $this->dbName = $dbName;
//     $this->filePath = $filePath;
//   }
//
//
//
//
//   function restoreDatabaseTables($dbHost, $dbUsername, $dbPassword, $dbName, $filePath){
//       // Connect & select the database
//       $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
//
//       // Temporary variable, used to store current query
//       $templine = '';
//
//       // Read in entire file
//       $lines = file($filePath);
//
//       $error = '';
//
//       // Loop through each line
//       foreach ($lines as $line){
//           // Skip it if it's a comment
//           if(substr($line, 0, 2) == '--' || $line == ''){
//               continue;
//           }
//
//           // Add this line to the current segment
//           $templine .= $line;
//
//           // If it has a semicolon at the end, it's the end of the query
//           if (substr(trim($line), -1, 1) == ';'){
//               // Perform the query
//               if(!$db->query($templine)){
//                   $error .= 'Error performing query "<b>' . $templine . '</b>": ' . $db->error . '<br /><br />';
//               }
//
//               // Reset temp variable to empty
//               $templine = '';
//           }
//       }
//       return !empty($error)?$error:true;
//   }
//
//   restoreDatabaseTables($dbHost, $dbUsername, $dbPassword, $dbName, $filePath);
// }
//
//
//





















// RESTORE DATABASE SCRIPT1_______________________________________________________________________----------------------

// $connection = mysqli_connect('localhost','root','','try_backup');
// $filename = 'backup.sql';
// $handle = fopen($filename,"r+");
// $contents = fread($handle,filesize($filename));
// $sql = explode(';',$contents);
// foreach($sql as $query){
//   $result = mysqli_query($connection,$query);
//
// }
// fclose($handle);
// echo 'Successfully dricks';

// // RESTORE DATABASE SCRIPT2_______________________________________________________________________----------------------

// $conn = mysqli_connect("localhost", "root", "", $dbName);
// $filePath = "C:/xampp/htdocs/Inventory_POS_Pielyn/admin/try_backup.sql";
// function restoreMysqlDB($filePath, $conn)
// {
//     $sql = '';
//     $error = '';
//
//     if (file_exists($filePath)) {
//         $lines = file($filePath);
//
//         foreach ($lines as $line) {
//
//             // Ignoring comments from the SQL script
//             if (substr($line, 0, 2) == '--' || $line == '') {
//                 continue;
//             }
//
//             $sql .= $line;
//
//             if (substr(trim($line), - 1, 1) == ';') {
//                 $result = mysqli_query($conn, $sql);
//                 if (! $result) {
//                     $error .= mysqli_error($conn) . "\n";
//                 }
//                 $sql = '';
//             }
//         } // end foreach
//
//         if ($error) {
//             $response = array(
//                 "type" => "error",
//                 "message" => $error
//             );
//         } else {
//             $response = array(
//                 "type" => "success",
//                 "message" => "Database Restore Completed Successfully."
//             );
//         }
//     } // end if file exists
//     return $response;
// }
// restoreMysqlDB($filePath,$conn)


?>
