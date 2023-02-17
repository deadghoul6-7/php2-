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
$questions = [
    ['дора любит пиво (1- да , 0-нет)', 1],
    ['сколько лет путину ?', 70],
    ['год в котором появился ковид ?', 2020]
];
if (!empty($_REQUEST)) {
    $answers = $_REQUEST['answer'];
    $res = [];
    foreach ($questions as $key => $question) {
        if ($question[1] == $answers[$key]) {
            $res[] = ['green', "Ваш ответ: $answers[$key], верно!"];
        } else {
            $res[] = ['red', "Ваш ответ: $answers[$key], не верно! Правильный ответ: $question[1]."];
        }
    }
}
?>
 
<form action="" method="post">
    <?php foreach ($questions as $key => $question): ?>
        <p><?=$question[0];?></p>
        <?php if (!empty($_REQUEST)): ?>
            <p style="color: <?=$res[$key][0];?>"><?=$res[$key][1];?></p>
        <?php else: ?>
            <input type="text" name="answer[]"><br>
        <?php endif;?>
        <hr>
    <?php endforeach;?>
    <?php if (empty($res)): ?>
        <input type="submit">
    <?php endif;?>
</form>
 
    <div>

        
    </div>
</body>
</html>