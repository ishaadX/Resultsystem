<?php 

include 'function.php';

session_start();

 $db_host="localhost";
 $db_username="root";
 $db_pass="";
 $db_name="inforesult";


 $username = trim($_POST['username']);
 $password = trim($_POST['password']);

 valid_user($username, $password);


 $connection = mysql_connect($db_host,$db_username,$db_pass,$db_name) 
 or
 die (  "database connection failed" . mysql_error());
 

// insert image 
 
  

 // end of image portion
 
 //selection of database name
 
 $db_select = mysql_select_db($db_name,$connection) 
 or 
 die("No database or table found");
 
 echo "Successfully connected to your database";

 $sql="INSERT INTO user (username, password)
VALUES
('$username','$password')";

 if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error($connection));
  }

  echo "<br />";
header("Location: afterlog.php");



mysql_close($connection);
 

?>
