<?php 
require "conn.php" ;
$user_name = $_POST["user_name"];
$user_pass = $_POST["password"];
$mysql_qry = "select * from employe_data where username  like '$user_name' and password like '$user_pass';";
$result = mysqli_query($conn , $mysql_qry) ;
if (mysqli_num_rows($result)>0) {
   echo "login succes !!! Welcome $user_name " ;
}
else {
   echo "login not succes!";
}
     
$query ="SELECT * FROM employe_data";
 
$result = mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table><tr><th>Id</th><th>User name</th><th>Password</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
   
}

?>