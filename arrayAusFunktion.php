
<?php
// Wenn ein Array aus einer Funktion returnt wird...

function ichReturneArray(){
    $arr = [
        "Beispieltext1",
        "Beispieltext2",
        "Beispieltext3",
        "Beispieltext4",
    ];
    return $arr;
}

$meinArrayAusDerFunktion = ichReturneArray();

var_dump($meinArrayAusDerFunktion); // Debug Ausgabe des Arrays

// Ausgabe des Arrays

foreach($meinArrayAusDerFunktion as $a){
    echo "Der Arrayeintrag ist: ".$a."<br>\n";
}

?>