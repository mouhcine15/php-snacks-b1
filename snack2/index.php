<?php 
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="name" id="name" placeholder="inserisci nome">
        <input type="text" name="mail" id="mail" placeholder="inserisce mail">
        <input type="text" name="age" id="age" placeholder="inserisci età">
        <button>invio</button>
    </form>
    
    <?php 
        
        // if (strlen($name = 0)) {
        //     echo 'inserisci credenziali';
        // } else if (strlen($name) >= 3) {
        //     echo 'accesso riuscito';
        // } else {
        //     echo 'accesso negato';
        // };

        if (strlen($name) >= 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)) {
            echo 'accesso riuscito';
        } else {
            echo 'accesso negato';
        };
    
    
    ?>
</body>
</html>