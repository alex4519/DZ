<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include 'about.php';
    
    ?>
    <div class="header">
         <div class="logoUser">
                <h1>Информация пользователя</h1>
        </div>
        <div class="infoUser">
            <p>имя :</p><p><?=$name?></p><br>
            <p>возраст :</p><p><?=$age?></p><br>
            <p>Адрес электронной почты :</p><p><?=$emailUser?></p><br>
            <p>Город :</p><p><?= $city?></p><br>
            <p>О себе :</p><p><?=$informUser?></p><br>
        </div>   
    </div>
   
    
     

    <h2></h2>
</body>
</html>