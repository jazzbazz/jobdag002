<?php
// session_start();
// Change this to your connection info.
// nieuwe inlog gegevens
// !!!!!!!!!!!!! verbinding webo Heverlee !!!!!!!!!!
  $DATABASE_HOST = 'ID301408_jobdag.db.webhosting.be';
  $DATABASE_USER = 'ID301408_jobdag';
  $DATABASE_PASS = 'Database-jobdag-2019';
  $DATABASE_NAME = 'ID301408_jobdag';
//  !!!!!!!!  verbinding datakind !!!!!!!!!!!!!!!
 	// $DATABASE_HOST = 'localhost:3306';
	// $DATABASE_USER = 'wom_student';
	// $DATABASE_PASS = 'Appel.Sap';
	// $DATABASE_NAME = 'wom_jobdag';
// !!!!!!!!!!!!! verbinding local Mamp !!!!!!!!!!!!!!!!!
 // $DATABASE_HOST = 'localhost';
 // $DATABASE_USER = 'root';
 // $DATABASE_PASS = 'root';
 // $DATABASE_NAME = 'jobdag';
// if ( !isset($_SESSION['control']) ) {
// // 	BEVEILIGING TEGEN INKIJK ?
//   	die ('you are not alowed to see this!');
//   }
// Try and connect using the info above.Windowsuser change pass !!!
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// TEST OM TE ZIEN OF CONNECTIE GOED ZIT
 // echo "<br> We didn't die";
?>
