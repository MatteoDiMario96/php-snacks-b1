<?php
    $paragrafo =    "You're not alone.
                    There's no doubt
                    Your gift.
                    Isn't futile to be.
                    If we'll be united
                    We're stronger together
                    We always have the high hope
                    Not all for one but one for all.
                    Don't worry 'bout a thing
                    We'll reach out to you
                    Even if it's a harder way
                    It's plain to see the reason why
                    Oh, that's all because of the mighty heart.
                    Remember it's just natural that we'll be there if you need help
                    Far across the distance, rest assured that our faith just won't die.
                    You know we have to sacrifice ourselves
                    Whatever they may say
                    It's plain to see the reason why
                    Oh, that's all because of the mighty heart
                    Remember it's just natural that
                    We'll be there if you need help
                    Far across the distance
                    Rest assured that our faith just won't die'. <br> . <br> ";


    $paragrafoExplode = explode('.', $paragrafo);
    var_dump($paragrafoExplode);
    echo'Paragrafo Esteso <br> <br>';
    echo $paragrafo;

    echo'Paragrafo Esploso' . '<br>';
    foreach ($paragrafoExplode as $key => $paragrafi) {
        echo $paragrafi . '<br>' . '<br>';
    }
?>