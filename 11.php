<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5</title>
</head>
<body>
    
   
<form action="11.php" method="post">
    <textarea name="text" placeholder=""></textarea>
    <input type="submit">
</form>
    

 <?php

if (isset($_REQUEST['text'])) {
    $translit = [
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
        'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
        'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
        'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
        'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch',
        'ш' => 'sh', 'щ' => 'shch', 'ъ' => '-', 'ы' => 'y', 'ь' => '`',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya', ' ' => ' '
    ];
    $str = mb_strtolower($_REQUEST['text']);
   
       
   
        foreach ($translit as $key => $item) {
            $str = str_replace($key, $item, $str);
        }
    
    echo $str;
}
?>
    <div>

        
    </div>
</body>
</html>