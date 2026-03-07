<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercice 3</title>
</head>
<body>

<?php
// 1️⃣ Déclaration des variables
$budget = 1553.89;          // Somme disponible
$achats = 1554.76;          // Montant total des achats
$remise = 5;                // Remise en pourcentage

// 2️⃣ Application de la remise
$montantARemettre = $achats * ($remise / 100);  // Calcul de la remise
$montantAPayer = $achats - $montantARemettre;  // Montant réel après remise

echo "<h3>Montant à payer après remise :</h3>";
echo number_format($montantAPayer, 2, ',', ' ') . " €<br><br>";

// 3️⃣ Vérification du budget
$difference = $budget - $montantAPayer;

if ($difference >= 0) {
    echo "Le budget est suffisant pour payer les achats.<br>";
    
    if ($difference > 0.10 * $montantAPayer) {
        echo "Budget confortable !<br>";
    }

} else {
    $manque = abs($difference);
    echo "Le budget n’est pas suffisant, il manque " . number_format($manque, 2, ',', ' ') . " €.<br>";
}
?>

</body>
</html>