<?php
// Creazione di un array di 10 animali
$animals = [
    [
        'nome' => 'Leo',
        'specie' => 'Leone',
        'classe' => 'Mammifero',
    ],
    [
        'nome' => 'Milo',
        'specie' => 'Gatto',
        'classe' => 'Mammifero',
    ],
    [
        'nome' => 'Benny',
        'specie' => 'Cane',
        'classe' => 'Mammifero',
    ],
    [
        'nome' => 'Tweety',
        'specie' => 'Canarino',
        'classe' => 'Uccello',
    ],
    [
        'nome' => 'Rango',
        'specie' => 'Camaleonte',
        'classe' => 'Rettile',
    ],
    [
        'nome' => 'Nemo',
        'specie' => 'Pesce pagliaccio',
        'classe' => 'Pesce',
    ],
    [
        'nome' => 'Dumbo',
        'specie' => 'Elefante',
        'classe' => 'Mammifero',
    ],
    [
        'nome' => 'Kaa',
        'specie' => 'Serpente',
        'classe' => 'Rettile',
    ],
    [
        'nome' => 'Flipper',
        'specie' => 'Delfino',
        'classe' => 'Mammifero',
    ],
    [
        'nome' => 'Perry',
        'specie' => 'Ornitorinco',
        'classe' => 'Mammifero',
    ],
];

$mammiferiArray = array_filter($animals, $animals['classe'] = 'Mammifero');

$pesciArray = array_filter($animals, $animals['classe'] = 'Pesce'); 

$rettiliArray = array_filter($animals, $animals['classe'] = 'Rettile'); 


