<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5</title>
</head>
<body>
    
   
<form action="7.php" method="post">
    <p>Year: <input type="text" name="year" /></p>
    <p><input type="submit" /></p>
    </form>

    <?php
          $year = $_POST["year"];
        
          $arrP = [
              "2023.02.16" => "Праздник смерти",
               "2023.02.17" =>"Праздник доты",
               "2023.02.18" =>"Праздник клоуна",
               "2023.02.19" =>"Праздник сигарет",
               "2023.02.20" =>"Праздник РОССИИ",
               "2023.02.21" =>"Праздник мидиса",
               "2023.02.22" =>"Праздник балдежа",
               "2023.02.23" =>"Праздник пива",
               "2023.02.24" =>"Праздник вина",
               "2023.02.25" =>"Праздник водки",
              ];
  
          $t = date("Y.m.d");
          
          echo "<h1>Сегодня ".$arrP[$t].", поздравляем!!!</h1>";

    ?>
    <div>

        
    </div>
</body>
</html>