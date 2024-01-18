<?php
$lesComptesXML= simplexml_load_string('<lesComptes/>');
$lesComptesXML=$lesComptesXML->addChild('compte');
$lesComptesXML->addChild('login','adil');
$lesComptesXML->addChild('organisation','Turgot');
$lesComptesXML->addChild('budget',' 125');
$lesComptesXML->addChild('login','alexandre');
$lesComptesXML->addChild('organisation','Hautil');
$lesComptesXML->addChild('budget','35');
$lesComptesXML->addChild('login','caroline');
$lesComptesXML->addChild('organisation','Turgot');
$lesComptesXML->addChild('budget','5');
var_dump($lesComptesXML->asXML())
?>
