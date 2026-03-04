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