<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5</title>
</head>
<body>
    
   


    <?php
         $today = date("Ymd");
        
          $arrP = array (
              "20230216" => "Праздник смерти",
               "20230217" =>"Праздник доты",
               "20230218" =>"Праздник клоуна",
               "20230219" =>"Праздник сигарет",
               "20230220" =>"Праздник РОССИИ",
               "20230221" =>"Праздник мидиса",
               "20230222" =>"Праздник балдежа",
               "20230223" =>"Праздник пива",
               "20230224" =>"Праздник вина",
               "20230225" =>"Праздник водки",
          );
  
          foreach ($arrP as $key => $value) {
            if($key == $today){
                echo $arrP[$key];
            }
        }

    ?>
    <div>

   
        
    </div>
</body>
</html>
