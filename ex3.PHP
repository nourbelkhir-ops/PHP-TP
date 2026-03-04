<<<<<<< HEAD
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
=======
<?php

$pays_population = [
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000
];

// 1️⃣ Afficher les pays avec population ≥ 20 000 000

echo "<strong>Pays ayant une population ≥ 20 000 000 :</strong><br><br>";

foreach ($pays_population as $pays => $population) {
    if ($population >= 20000000) {
        echo $pays . " : " . $population . " habitants<br>";
    }
}

echo "<br>";

// 2️⃣ Nombre total d’entrées du tableau

$total = count($pays_population);

echo "Le tableau recense " . $total . " pays au total.";

?>
>>>>>>> 9023fe2 (Second upload)
