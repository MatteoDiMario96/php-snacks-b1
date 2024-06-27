<?php
    include_once __DIR__ . '/utilities/array.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter classes animals!</title>
</head>
<body>
    <main>
        <ul>
            <?php foreach ($mammiferiArray as $key => $animale) { ?>
                <li>
                    <h2>
                    <?php 
                        echo 'Ciao sono ' . $animale['nome'] . ' e sono un/una ' . $animale['specie'] . ' e sono un ' . $animale['classe'] . '.';
                    ?>
                    </h2>
                </li>
            <?php } ?> 
        </ul>
        <ul>
            <?php foreach ($pesciArray as $key => $animale) { ?>
                <li>
                    <h2>
                    <?php 
                        echo 'Ciao sono ' . $animale['nome'] . ' e sono un/una ' . $animale['specie'] . ' e sono un ' . $animale['classe'] . '.';
                    ?>
                    </h2>
                </li>
            <?php } ?> 
        </ul>
        <ul>
            <?php foreach ($rettiliArray as $key => $animale) { ?>
                <li>
                    <h2>
                    <?php 
                        echo 'Ciao sono ' . $animale['nome'] . ' e sono un/una ' . $animale['specie'] . ' e sono un ' . $animale['classe'] . '.';
                    ?>
                    </h2>
                </li>
            <?php } ?> 
        </ul>
        <ul>
            <?php foreach ($otherArray as $key => $animale) { ?>
                <li>
                    <h2>
                    <?php 
                        echo 'Ciao sono ' . $animale['nome'] . ' e sono un/una ' . $animale['specie'] . ' e sono un ' . $animale['classe'] . '.';
                    ?>
                    </h2>
                </li>
            <?php } ?> 
        </ul>
    </main>
</body>
</html>

