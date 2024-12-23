<?php 
$db_name = "employe" ;
$mysql_username = "root" ;
$mysql_password = "" ;
$ip_server = $_SERVER['SERVER_ADDR'];

$mysql_server = $ip_server ;
echo $ip_server; 
$conn = mysqli_connect($mysql_server , $mysql_username, $mysql_password , $db_name) ;
if ($conn) {
echo " connection Succes ... " ;
}
else {
echo " connection fail ... ".mysqli_connect_error() ;
   echo " connection fail" ;
}
?>
