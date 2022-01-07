
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

var_dump($meinArrayAusDerFunktion);

?>