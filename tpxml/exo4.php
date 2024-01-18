<?php
$lesVoituresXML= simplexml_load_string('<lesVoitures/>');
$uneVoitureXML=$lesVoituresXML->addChild('voiture');
$uneVoitureXML->addChild('nom','Twingo');
$uneVoitureXML->addChild('marque','Renault');
$uneVoitureXML->addChild('nom','batmobile');
$uneVoitureXML->addChild('marque','mercedes');
var_dump($lesVoituresXML->asXML())
?>