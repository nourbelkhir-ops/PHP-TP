<?php

$nombre = 3;

echo "<strong>Table de multiplication de $nombre :</strong><br><br>";

for ($i = 1; $i <= 10; $i++) {
    echo "$nombre x $i = " . ($nombre * $i) . "<br>";
}

?>
<?php
echo "<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Tables de multiplication</title>
    <style>
        table { border-collapse: collapse; }
        td, th { border: 1px solid black; padding: 8px; text-align: center; }
        .rouge { background-color: red; color: white; }
    </style>
</head>
<body>";

echo "<h2>Tables de multiplication de 1 à 9</h2>";

echo "<table>";

// En-tête avec nombres de 1 à 9
echo "<tr><th>x</th>";
for ($i = 1; $i <= 9; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

// Corps de la table
for ($i = 1; $i <= 9; $i++) {
    echo "<tr>";
    echo "<th>$i</th>"; // numéro de la ligne

    for ($j = 1; $j <= 9; $j++) {
        $result = $i * $j;

        // Colorer en rouge si multiple de 3
        if ($result % 3 == 0) {
            echo "<td class='rouge'>$result</td>";
        } else {
            echo "<td>$result</td>";
        }
    }

    echo "</tr>";
}

echo "</table></body></html>";
?>