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
                        <?php echo $alunno['nome']?>;
                    </h2>
                    <h3>
                    <?php echo $alunno['cognome']?>;
                    </h3>
                    <h3>
                        La media dei tuoi voti è  : 
                    </h3>
                    <h1>
                        <?php
                            echo array_sum($alunno['votes'], count());
                        ?>
                    </h1>
                </li>
        <?php } ?>
        
    </ul>
</body>
</html>