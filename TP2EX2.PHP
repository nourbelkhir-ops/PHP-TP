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

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
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

</body>
</html>