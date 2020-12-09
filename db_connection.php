<?php
/*
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","employee");
*/
$serverName = "localhost";
$serverUser = "root";
$serverPass ="";
$dbName = "APTECH_CHALLENGE";

$conn = mysqli_connect($serverName,$serverUser,$serverPass,$dbName);
//OR $dbCon = mysqli_connect("localhost","root","", "employee");

/*
if(!$dbCon){
die("Error: Connection unsuccessful".mysql_connect_error());
}
*/

// if($conn){
// echo "<script>";
// //echo "alert('Connection established successfully') ";
// echo "</script>";
// }
// else {
// 	die("Error: Connection unsuccessful".mysql_connect_error());
// } 
 ?>
 