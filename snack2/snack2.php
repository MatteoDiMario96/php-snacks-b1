<?php
// Dico se la variabile è assegnata dagli il primo valore altrimenti il secondo 
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

        <form action="./snack2.php" method="GET">
            
            <?php
                if(strlen($userName) === 0){
                    //Quando non hai inserito caratteri
                    echo '<p> Inserisci il tuo nome con almeno tre caratteri</p>';
                }elseif(strlen($userName) < 3){
                    //Quando hai inserito meno di 3 caratteri   
                    echo '<p> Metti almeno 3 caratteri </p>';
                }else{
                    // Quando hai fatto giusto 
                    echo '';
                }
            ?>

            <input type="text" name="userName" id="userName" required>



            <?php
                if(empty($userEmail)){
                    // Quando hai inserito nessuna mail 
                    echo '<p> Nessuna mail Inserita </p>';
                }elseif(stripos($userEmail, '.') && stripos($userEmail, '@')){
                    // Quando l'email è giusta 
                    echo '';
                }else{
                    // Quando l' email è inesatta 
                    echo '<p>Inserisci un Email valida. Almeno un punto e una @. </p>';
                }
            ?>

            <input type="email" name="userEmail" id="userEmail" required>


            
            <?php
                if($userAge === ''){
                    // Quando la variabile è ugaule a stringa vuota 
                    echo '<p> Devi inserire la tua età </p>';
                }elseif(is_numeric($userAge) === false){
                    // Quando non è un numero
                    echo '<p> Puoi inserire solo numeri!';
                }else{
                    // Quando è giusta. 
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
                    // Tutti parametri vuoti.
                    echo '';
                }elseif(strlen($userName) > 3 && stripos($userEmail, '.') && stripos($userEmail, '@') && is_numeric($userAge) === true){
                    // Tutti parametri giusti.
                    echo 'Accesso consentito';
                }elseif(strlen($userName) < 3 || stripos($userEmail, '.') === false || stripos($userEmail, '@') === false || is_numeric($userAge) === false){
                    // Anche un solo parametro sbagliato
                    echo 'Accesso negato';
                }
            ?>
        </div>


    </main>
</body>
</html>