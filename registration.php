<?php 
require "conn.php" ;
$name = $_POST["user_name"];
$password = $_POST["password"];
$age = $_POST["age"];

$mysql_qry = "INSERT INTO   employe_data (username,password,age) VALUES  ('$name','$password','$age')";
// $result = mysqli_query($conn , $mysql_qry) ;
if($conn->query($mysql_qry)=== TRUE) {
   echo "insert success ";
   }
   else {
   echo "Error:".$mysql_qry.$conn->error;
   }
   $conn->close();
   
?>