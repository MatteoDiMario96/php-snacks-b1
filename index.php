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