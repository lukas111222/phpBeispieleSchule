
<?php
// assoziatives array

$meinArray = [
    "name" => "Berger",
    "vorname" => "Ron",
    "alter" => 3,
];

$ausgabe = "";

$ausgabe .= "Name: ".$meinArray['name']."<br>\n";
$ausgabe .= "Vorname: ".$meinArray['vorname']."<br>\n";
$ausgabe .= "Alter: ".$meinArray['alter']."<br>\n";

echo $ausgabe;
?>