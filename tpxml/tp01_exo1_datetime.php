<?php

$aujourdhui = new DateTime();
echo $aujourdhui->format("l d F o H:i"), PHP_EOL;

$dans7jours = clone ($aujourdhui);
$dans7jours->add(new DateInterval("P7D"));
echo $dans7jours->format("l d F o"), PHP_EOL;

$dans1mois = clone ($aujourdhui);
$dans1mois->add(new DateInterval("P1M"));
echo $dans1mois->format("l d F o"), PHP_EOL;

$examenSIO = new DateTime();
$examenSIO->setDate(2025, 05, 15);
echo "examen SIO le :", $examenSIO->format("l Y-m-d"), PHP_EOL;
$nbJoursAvantExamen = $examenSIO->diff($aujourdhui);
echo "il reste ", $nbJoursAvantExamen->format("%R%a"), "jours", PHP_EOL;

$anniv = new DateTime();
$anniv->setDate(2003, 9, 17);
echo "née le :", $anniv->format("l Y-m-d"), PHP_EOL;
$dateAniv = $anniv->diff($aujourdhui);
echo "Agée de ", $dateAniv->format("%R%y"), "ans", PHP_EOL;

$anniv = new DateTime();
$anniv->setDate(2003, 9, 17);
echo "née le :", $anniv->format("l Y-m-d"), PHP_EOL;
$dateAniv = $anniv->diff($aujourdhui);
echo "Agée de ", $dateAniv->format("%R%y"), "ans", PHP_EOL;

$jo=(new DateTime())->setDate(2024,7,26);
$aujourdhui= new DateTime();

echo $aujourdhui->diff($jo)->format("%R%a");

?>