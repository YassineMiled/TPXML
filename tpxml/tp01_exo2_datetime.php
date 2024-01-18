<?php
// Création d'un objet DateTime pour le mois courant
$moisCourant = new DateTime();

// Affichage des 6 derniers mois
for ($i = 0; $i < 6; $i++) {
    // Affichage du mois au format "F Y" (nom du mois suivi de l'année)
    echo $moisCourant->format('F Y') . PHP_EOL;

    // Passage au mois précédent
    $moisCourant->modify('-1 month');
}
?>
