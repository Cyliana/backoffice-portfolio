<?php
$db_servername = 'localhost';
$db_username = 'amanda';
$db_password = 'amanda';
$db_dbname = 'db_backoffice';


try 
{
  $db = new PDO("mysql:host=$db_servername;dbname=$db_dbname", $db_username, $db_password);
  // set the PDO error mode to exception
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} 

catch(PDOException $e) 
{
  echo "Connection failed: " . $e->getMessage();
}


?>