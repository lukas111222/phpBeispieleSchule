<?php
$meinArray = [
    ['hallo','hallo2'],
    ['Ron','Bergenser'],
    ['Test','Mustermann'],
];
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