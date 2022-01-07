<?php
function fillArray($anzahlEintraege){
    $arr = array();
    for($i=0;$i<$anzahlEintraege;$i++){
        $arr[] = [rand(10,50000),rand(10,50000)]; // Einfach nur Werte erfinden
    }
    return $arr;
}

$meinArray = fillArray(10);

?>
<table>
    <tr>
        <th>Spalte 1</th>
        <th>Spalte 2</th>
    </tr>
<?php

$ausgabe = "";

foreach ($meinArray as $a) {
    $ausgabe .= "<tr>\n";
    $ausgabe .= "<td>".$a['0']."</td>\n";
    $ausgabe .= "<td>".$a['1']."</td>\n";
    $ausgabe .= "</tr>\n";
}

echo $ausgabe;
?>
</table>