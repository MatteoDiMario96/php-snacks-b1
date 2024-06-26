<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Posizionamento</title>
</head>
<body>
    <main>
        <div class="square-gray">
            <div>
                <?php
                    for($i = 0; $i < 2; $i = $i + 1 ){
                        echo $db['teachers'][$i]['name'];
                        echo $db['teachers'][$i]['lastname'];
                    }
                    var_dump($db['teachers']);
                ?>
            </div>
        </div>
        <div class="square-green">
            <div>
                <?php
                    for($i = 0; $i < 2; $i = $i + 1 ){
                        echo $db['pm'][$i]['name'];
                        echo $db['pm'][$i]['lastname'];
                    }
                    var_dump($db['pm']);
                ?>
            </div>
        </div>
    </main>
</body>
</html>