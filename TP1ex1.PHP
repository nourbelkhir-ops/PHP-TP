<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercice 1</title>
</head>
<body>

    <p style="text-align:center; font-weight:bold;">
        Bienvenue en PHP
    </p>

<?php
    // 2) Déclaration de la variable
    $nom = " Mohamed Koutheir Ben Ghazi ";

    echo "<h3>Chaîne originale :</h3>";
    echo $nom . "<br><br>";

    // Suppression des espaces inutiles
    $nom_sans_espace = trim($nom);

    echo "<h3>Chaîne après trim() :</h3>";
    echo $nom_sans_espace . "<br><br>";

    // Affichage en majuscules
    echo "<h3>En majuscules :</h3>";
    echo strtoupper($nom_sans_espace) . "<br><br>";

    // Affichage en minuscules
    echo "<h3>En minuscules :</h3>";
    echo strtolower($nom_sans_espace) . "<br><br>";
?>

</body>
</html>