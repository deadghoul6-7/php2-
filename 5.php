<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5</title>
</head>
<body>
    
   
<form action="5.php" method="post">
    <p>Year: <input type="date" name="year" /></p>
    <p><input type="submit" /></p>
    </form>

    <?php
        $year = $_POST["year"];
        
        $yourDate = date($year);
        $nowY = date("Y");
        $nowM = date("m");
        $nowD = date("d");


        $yourDates = strtotime($year);
        $yourYear = idate("Y",$yourDates);
        $yourMonth = idate("m",$yourDates);
        $yourDay = idate("d",$yourDates);


        if($nowY < $yourYear)
        {
            echo("ошибка");
        }
        else{
            $result = $nowY - $yourYear;
            if($yourMonth > $nowM)
            {
                
                echo($result);
            }
            else if($yourDay > $nowD)
            {
                
                echo($result);
            }
            else
            {
                echo($result);
            }
        }

    ?>
    <div>

        
    </div>
</body>
</html>