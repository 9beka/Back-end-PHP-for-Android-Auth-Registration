<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>Авторизация</h1>
    <?php
    echo "<h2>Авторизация</h2>" ;
    require 'conn.php';
?>
<?php
     
     $query ="SELECT * FROM employe_data";
      
     $result = mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn)); 
     if($result)
     {
         $rows = mysqli_num_rows($result); // количество полученных строк
          
         echo "<table><tr><th>Id</th><th>Модель</th><th>Производитель</th></tr>";
         for ($i = 0 ; $i < $rows ; ++$i)
         {
             $row = mysqli_fetch_row($result);
             echo "<tr>";
                 for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
             echo "</tr>";
         }
         echo "</table>";
          
         // очищаем результат
        
     }
     ?>
     
    <form action="login.php" method="POST">
      Пользователь : <input type="text" name="user_name" /> Password :
      <input type="text" name="password" />
      <input type="submit" />
    </form>
    <br>
    <p><a href="registration.html">ЗАРЕГЕСТРИРОВАТЬСЯ!</a></p>
  </body>
</html>
