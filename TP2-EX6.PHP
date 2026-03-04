<?php

$employes = [
    ["id" => 45, "nom" => "Marc", "poste" => "Développeur", "salaire" => 3200],
    ["id" => 12, "nom" => "Julie", "poste" => "Designer", "salaire" => 2800],
    ["id" => 89, "nom" => "Sophie", "poste" => "RH", "salaire" => 3000],
    ["id" => 34, "nom" => "Antoin", "poste" => "Développeur", "salaire" => 3500],
];


// ===============================
// a) Extraire les IDs
// ===============================

$identifiants = array_column($employes, "id");

echo "<strong>Liste des IDs :</strong><br>";
print_r($identifiants);
echo "<br><br>";


// ===============================
// b) Recherche d'un ID
// ===============================

$idRecherche = 42;

if (in_array($idRecherche, $identifiants)) {

    // récupérer l’index correspondant
    $index = array_search($idRecherche, $identifiants);

    echo "L'employé ID " . $idRecherche . " est " 
         . $employes[$index]["nom"] . 
         ", son poste est : " 
         . $employes[$index]["poste"];

} else {

    echo "Aucun employé trouvé avec l'ID " . $idRecherche;

}

echo "<br><br>";


// ===============================
// c) Masse salariale totale (1 seule ligne)
// ===============================

$masseSalariale = array_sum(array_column($employes, "salaire"));

echo "<strong>Masse salariale totale :</strong> " . $masseSalariale . " €<br><br>";


// ===============================
// d) Trouver le Designer
// ===============================

$postes = array_column($employes, "poste");
$indexDesigner = array_search("Designer", $postes);

echo "<strong>Employé Designer :</strong> " . $employes[$indexDesigner]["nom"];

?>