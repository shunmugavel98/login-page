<?php
$host="localhost";  
$username='root';
$password='';
$db_name = "sun";  
$conn=mysqli_connect($host,$username,$password,$db_name);
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>

