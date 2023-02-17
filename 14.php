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
$month = [
    1 => 'январь',
    2 =>  'февраль', 
    3 =>  'март',
    4 =>  'апрель', 
    5 =>  'май', 
    6 => 'июнь', 
    7 =>  'июль', 
    8 =>  'август', 
    9 =>  'сентябрь', 
    10 =>  'октябрь', 
    11 =>  'ноябрь', 
    12 =>  'декабрь'];
$week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
if (isset($_REQUEST)) {
    $day = $_REQUEST['day'];
    $mon = array_search($_REQUEST['month'], $month);
    $year = $_REQUEST['year'];
    $dayOfWeek = $week[date('w', mktime(0, 0, 0, $mon, $day, $year))];
    echo $dayOfWeek;
}
?>
   <div>  </div>
  <div> </div>
 <form action="" method="post">
    <select name="day">
        <?php for ($i = 1; $i <= 31; $i++): ?>
            <option><?=$i;?></option>
        <?php endfor;?>
    </select>
    <select name="month">
        <?php foreach ($month as $item): ?>
            <option><?=$item;?></option>
        <?php endforeach;?>
    </select>
    <select name="year">
        <?php for ($i = 1990; $i <= 2025; $i++): ?>
            <option><?=$i;?></option>
        <?php endfor;?>
    </select>
    <input type="submit">
</form>
 
    <div>

        
    </div>
</body>
</html>