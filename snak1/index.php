
<?php

$arr_partite = [
    // partita 1
    [
        [
            'nome'  => 'Olimpia Milano',
            'di_casa'   => true,
            'punteggio' => 55
        ],
        [
            'nome'  => 'Virtus Bologna',
            'di_casa'   => false,
            'punteggio' => 60
        ],
    ],

    [
        [
            'nome'  => 'Derthona',
            'di_casa'   => true,
            'punteggio' => 74
        ],
        [
            'nome'  => 'Venezia',
            'di_casa'   => false,
            'punteggio' => 82
        ],
    ],

    [
        [
            'nome'  => 'Reggiana',
            'di_casa'   => true,
            'punteggio' => 80
        ],
        [
            'nome'  => 'Dinamo Sassari',
            'di_casa'   => false,
            'punteggio' => 60
        ],
    ],
    [
        [
            'nome'  => 'VL Pesaro',
            'di_casa'   => true,
            'punteggio' => 90
        ],
        [
            'nome'  => 'Trieste',
            'di_casa'   => false,
            'punteggio' => 86
        ],
    ],
]; ?>

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

    $arr_length = count($arr_partite);
    for ($_i=0; $_i < $arr_length ; $_i++) { 
        $partita = $arr_partite[$_i];
        echo "<div>{$partita[0]['nome']} - {$partita[1]['nome']} | {$partita[0]['punteggio']} - {$partita[1]['punteggio']}</dic>";
    } ?>
</body>
</html>