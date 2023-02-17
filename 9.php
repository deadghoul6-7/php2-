<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5</title>
</head>
<body>
    
   
<form action="9.php">
                <textarea name="year" id="year" cols="30" rows="10"></textarea>
                <input type="submit">
            </form>

            <?php
                $ta = $_GET['year'];
                $taWithOutSpace = str_replace(array(" "), '', $ta);
                echo "Количество символов с пробелами: " . mb_strlen($ta, 'utf-8');
            ?>
            <br>
            <?php
                echo "Количество символов без пробелов: " . mb_strlen($taWithOutSpace, 'utf-8');
            ?>
    <div>

        
    </div>
</body>
</html>
