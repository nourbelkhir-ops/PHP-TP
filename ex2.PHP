<<<<<<< HEAD
=======
<?php

$Mois = [
    "Janvier" => 31,
    "Février" => 28,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Août" => 31,
    "Septembre" => 30,
    "Octobre" => 31,
    "Novembre" => 30,
    "Décembre" => 31
];

?>

>>>>>>> 9023fe2 (Second upload)
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
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
=======
    <title>Tableau des Mois</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Nombre de jours par mois</h2>

<table>
    <tr>
        <th>Numéro</th>
        <th>Mois</th>
        <th>Nombre de jours</th>
    </tr>

    <?php
    $numero = 1;

    foreach ($Mois as $nomMois => $nbJours) {
        echo "<tr>";
        echo "<td>" . $numero . "</td>";
        echo "<td>" . $nomMois . "</td>";
        echo "<td>" . $nbJours . "</td>";
        echo "</tr>";
        $numero++;
    }
    ?>

</table>
>>>>>>> 9023fe2 (Second upload)

</body>
</html>