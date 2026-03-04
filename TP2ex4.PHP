<?php

$emails = [
    "ahmed556@yahoo.fr",
    "contact@google.com",
    "test.user@google.com",
    "admin@hotmail.fr",
    "info@google.com",
    "support@hotmail.fr"
];


// ==============================
// a) Extraction des domaines
// ==============================

$domaines = [];

foreach ($emails as $email) {
    $parties = explode("@", $email);
    $domaines[] = $parties[1]; // partie après @
}


// ==============================
// b) Calcul des occurrences
// ==============================

$statistiques = array_count_values($domaines);


// ==============================
// c) Calcul des pourcentages
// ==============================

$total_emails = count($emails);

echo "<strong>Répartition des fournisseurs :</strong><br><br>";

foreach ($statistiques as $fournisseur => $occurrence) {
    
    $pourcentage = ($occurrence / $total_emails) * 100;
    
    echo "Fournisseur d'accès : " . $fournisseur . " = " . $pourcentage . " %<br>";
}

?>