<?php

$userName = $_GET['userName'] ?? '';
$userEmail = $_GET['userEmail'] ?? '';
$userAge = $_GET['userAge'] ?? '';


?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM!</title>
</head>
<body>
    <main>

        <form action="./risposta.php" method="GET">

            <?php
                if(strlen($userName) === 0){
                    echo '<p> Inserisci il tuo nome con almeno tre caratteri</p>';
                }elseif(strlen($userName) < 3){
                    echo '<p> Metti almeno 3 caratteri </p>';
                }else{
                    echo '';
                }
            ?>

            <input type="text" name="userName" id="userName" required>



            <?php
                if(empty($userEmail)){
                    echo '<p> Nessuna mail Inserita </p>';
                }elseif(stripos($userEmail, '.') && stripos($userEmail, '@')){
                    echo '<p> Email valida! </p>';
                }else{
                    echo '<p>Inserisci un Email valida. </p>';
                }
            ?>

            <input type="email" name="userEmail" id="userEmail" required>


            
            <?php
                if($userAge === ''){
                    echo '<p> Devi inserire la tua età </p>';
                }elseif(is_numeric($userAge) === false){
                    echo '<p> Puoi inserire solo numeri!';
                }else{
                    echo '';
                }
            ?>
            <input type="number" name="userAge" id="userAge" required>
            <button type="submit">
                invia
            </button>
        </form>
        <div>
            <?php
                if($userName === '' && $userEmail === '' && $userAge === ''){
                    echo '';
                }elseif(strlen($userName) > 3 && stripos($userEmail, '.') && stripos($userEmail, '@') && is_numeric($userAge) === true){
                    echo 'Accesso consentito';
                }elseif(strlen($userName) < 3 || stripos($userEmail, '.') === false || stripos($userEmail, '@') === false || is_numeric($userAge) === false){
                    echo 'Accesso negato';
                }
            ?>
        </div>


    </main>
</body>
</html>