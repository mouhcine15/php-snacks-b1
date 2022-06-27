<?php 
    $numeri_casuali = [];
    $rand_num = range(0, 999);
    shuffle($rand_num);
    $rand_num = array_slice($rand_num, 0, 14);
    array_push($numeri_casuali, $rand_num);
    
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
    <?php 
        // print_r($numeri_casuali);
        // echo $numeri_casuali;
        $arr_length = count($numeri_casuali);
        for ($_i = 0; $_i <= $arr_length ; $_i++) { 
        $numero = $numeri_casuali[$_i];
        echo "<div>{$numero[$_i]}</dic>";
    }
    ?>
</body>
</html>