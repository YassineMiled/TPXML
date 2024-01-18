<?php
$chaine = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<voiture>
<modele>Twingo</modele>
<marque>Renault</marque>
</voiture>
XML;

$xml = new SimpleXMLElement($chaine);
var_dump($xml);
?>