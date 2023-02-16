<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5</title>
</head>
<body>
    
   
<form action="6.php" method="post">
    <p>Year: <input type="text" name="year" /></p>
    <p><input type="submit" /></p>
    </form>

    <?php
         $year = $_POST["year"];
        
         list($day, $month) = explode(".", $year);
 
         $arrSigns = ["Овен","Телец","Близнецы","Рак","Лев","Дева","Весы",
         "Скорпион","Стрелец","Козерог","Водолей","Рыбы"];
 
         
         echo($arrSigns[yourSign($month,$day)]);
 
         function yourSign($month,$day)
         {
             if(($day >= 21 and ($month == "03" or $month == 3)) or
              (($day >=19 and($month == "04" or $month == 4))))
              {
                 return 0;// овен 
              }
              if(($day >= 21 and ($month == "04" or $month == 4)) or
              (($day <=21 and($month == "05" or $month == 5))))
              {
                 return 1;// Телец 
              }
              if(($day >= 22 and ($month == "05" or $month == 5)) or
              (($day <= 21 and($month == "06" or $month == 6))))
              {
                 return 2;// Близнецы 
              }
              if(($day >= 22 and ($month == "06" or $month == 6)) or
              (($day <=22 and($month == "07" or $month == 7))))
              {
                 return 3;// Рак 
              }
              if(($day >= 23 and ($month == "07" or $month == 7)) or
              (($day <= 21 and ($month == "08" or $month == 8))))
              {
                 return 4;// Лев 
              }
              if(($day >= 22 and ($month == "08" or $month == 8)) or
              (($day <=23 and($month == "09" or $month == 9))))
              {
                 return 5;// Дева 
              }
              if(($day >= 24 and ($month == "09" or $month == 9)) or
              (($day <=23 and($month == "10" or $month == 10))))
              {
                 return 6;// Весы 
              }
              if(($day >= 24 and ($month == "10" or $month == 10)) or
              (($day <=23 and($month == "11" or$month == 11))))
              {
                 return 7;// Скорпион 
              }
              if(($day >= 24 and ($month == "11" or $month == 11)) or
              (($day <=22 and($month == "12" or $month == 12))))
              {
                 return 8;// Стрелец 
              }
              if(($day >= 23 and ($month == "12" or$month == 12)) or
              (($day <=20 and($month == "01" or $month == 1))))
              {
                 return 9;// Козерог 
              }
              if(($day >= 21 and ($month == "01" or $month == 1)) or
              (($day <=19 and($month == "02" or $month == 2))))
              {
                 return 10;// Водолей 
              }
              if(($day >= 20 and ($month == "03" or $month == 3)) or
              (($day <=20 and($month == "04" or $month == 4))))
              {
                 return 11;// Рыбы 
              }
              
         }

    ?>
    <div>

        
    </div>
</body>
</html>