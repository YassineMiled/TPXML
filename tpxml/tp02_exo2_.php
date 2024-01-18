<?php
$chaine= <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<LesVoiture>

<voiture>
<modele>Twingo</modele>
<marque>Renault</marque>
<moteur>essence</moteur>
<annee>2016</annee>
<kms>25000</kms>
</voiture>

<voiture>
<modele>C1</modele>
<marque>Citroen</marque>
<moteur>diesel</moteur>
<annee>2014</annee>
<kms>110000</kms>
</voiture>
</LesVoiture>
XML;

$xml=new SimpleXMLElement($chaine);
var_dump($xml);

echo $xml->moteur, PHP_EOL;
foreach ($xml->children() as $child) {
    echo $child->modele," ",
    $child->marque," ",
    $child->moteur," ",
    $child->annee," ",
    $child->kms," ", PHP_EOL;}

?>