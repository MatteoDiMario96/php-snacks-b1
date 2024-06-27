<?php
    include __DIR__ . '/utilities/array.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunni</title>
</head>
<body>
    <ul>
        <?php foreach ($alunni as $key => $alunno) { ?>
                <li>
                    <h2>
                        <?php $alunno['nome']?>;
                    </h2>
                    <h3>
                    <?php $alunno['cognome']?>;
                    </h3>
                    <h3>
                        I tuoi votii sono : 
                    </h3>
                    <h1>
                        <?php foreach ($alunno as $key => $voto) {
                            $voto;
                        } ?>
                    </h1>
                </li>
        <?php } ?>
        
    </ul>
</body>
</html>