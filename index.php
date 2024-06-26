<?php

$randNumb1 = rand(20, 100);
$randNumb2 = rand(20, 100);


$arrayA = [
    [
        'squadraCasa' => 'Olimpia Milano',
        'squadraOspite' => 'Cantù',
        'puntiFattiCasa' => $randNumb1, 
        'puntiFattiOspite' => $randNumb2,
    ],
    [
        'squadraCasa' => 'Olimpia Roma',
        'squadraOspite' => 'Parigi',
        'puntiFattiCasa' => $randNumb1, 
        'puntiFattiOspite' => $randNumb2,
    ],
    [
        'squadraCasa' => 'Olimpia Genoa',
        'squadraOspite' => 'Dubai',
        'puntiFattiCasa' => $randNumb1, 
        'puntiFattiOspite' => $randNumb2,
    ],
];

var_dump($arrayA);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario partite!</title>
</head>
<body>
    <main>
        <h1>
            Calendario:
        </h1>
        <h2>
            <?php
                echo($arrayA[0]['squadraCasa']);
            ?>
            -
            <?php
                echo($arrayA[0]['squadraOspite']);
            ?>

        </h2>
    </main>
</body>
</html>