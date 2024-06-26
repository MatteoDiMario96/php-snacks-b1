<?php
    $arrayNumbers = [];
    while(count($arrayNumbers) < 15){
        $randNumb = rand(1,15);
        if(!in_array($randNumb, $arrayNumbers)){
            $arrayNumbers[] = $randNumb;
        }
    }
    var_dump($arrayNumbers);
?>