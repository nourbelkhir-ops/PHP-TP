<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>

    <!-- Titre stylisé directement avec la balise -->
    <h1 style="color:red; text-align:center; font-weight:bold; font-style:italic; font-size:32px;">
        Calcul sur les variables
    </h1>

<?php
    // Déclaration des variables
    $TVA = 0.20;        // 20%
    $Prix = 150;
    $NombreArticles = 10;

    // Calcul du montant HT
    $montantHT = $NombreArticles * $Prix;

    // Calcul du montant TTC
    $montantTTC = ($montantHT * $TVA) + $montantHT;

    // Affichage des résultats
    echo "<h3>Résultats :</h3>";
    echo "Montant HT : " . $montantHT . " €<br>";
    echo "Montant TTC : " . $montantTTC . " €<br>";
?>

</body>
</html>