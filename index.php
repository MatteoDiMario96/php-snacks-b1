<?php

$randNumb1 = rand(20, 100);
$randNumb2 = rand(20, 100);
$randNumb3 = rand(20, 100);
$randNumb4 = rand(20, 100);
$randNumb5 = rand(20, 100);
$randNumb6 = rand(20, 100);



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
        'puntiFattiCasa' => $randNumb3, 
        'puntiFattiOspite' => $randNumb4,
    ],
    [
        'squadraCasa' => 'Olimpia Genoa',
        'squadraOspite' => 'Dubai',
        'puntiFattiCasa' => $randNumb5, 
        'puntiFattiOspite' => $randNumb6,
    ],
];
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
        <article>
            <h2>
                <?php
                    echo($arrayA[0]['squadraCasa']);
                ?>
                -
                <?php
                    echo($arrayA[0]['squadraOspite']);
                ?>
                ||
                <?php
                    echo($arrayA[0]['puntiFattiCasa']);
                ?>
                -
                <?php
                    echo($arrayA[0]['puntiFattiOspite']);
                ?>
            </h2>
        </article>
        <article>
            <h2>
                <?php
                    echo($arrayA[1]['squadraCasa']);
                ?>
                -
                <?php
                    echo($arrayA[1]['squadraOspite']);
                ?>
                ||
                <?php
                    echo($arrayA[1]['puntiFattiCasa']);
                ?>
                -
                <?php
                    echo($arrayA[1]['puntiFattiOspite']);
                ?>
            </h2>
        </article>
        <article>
            <h2>
                <?php
                    echo($arrayA[2]['squadraCasa']);
                ?>
                -
                <?php
                    echo($arrayA[2]['squadraOspite']);
                ?>
                ||
                <?php
                    echo($arrayA[2]['puntiFattiCasa']);
                ?>
                -
                <?php
                    echo($arrayA[2]['puntiFattiOspite']);
                ?>
            </h2>
        </article>
    </main>
</body>
</html>