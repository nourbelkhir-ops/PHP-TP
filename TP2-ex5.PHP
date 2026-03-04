<?php

$panier = [
    ["nom" => "Clavier Mécanique", "categorie" => "Informatique", "prix" => 85],
    ["nom" => "Livre PHP 8", "categorie" => "Librairie", "prix" => 40],
    ["nom" => "Souris Sans Fil", "categorie" => "Informatique", "prix" => 45],
    ["nom" => "Sac à dos", "categorie" => "Accessoires", "prix" => 60]
];


// ===============================
// a) Affichage des produits
// ===============================

echo "<strong>Liste des articles :</strong><br><br>";

$total = 0;
$compteurInfo = 0;
$numero = 1;

foreach ($panier as $article) {
    
    echo $numero . ". Article : " . $article["nom"] . 
         " | Prix : " . $article["prix"] . " €<br>";
    
    $numero++;
    
    // b) Calcul du total
    $total += $article["prix"];
    
    // c) Compter les articles Informatique
    if ($article["categorie"] == "Informatique") {
        $compteurInfo++;
    }
}

echo "<br>";

// ===============================
// b) Affichage du total
// ===============================

echo "<strong>Montant total du panier : </strong>" . $total . " €<br><br>";


// ===============================
// c) Affichage du nombre d’articles Informatique
// ===============================

echo "<strong>Nombre d’articles de la catégorie Informatique : </strong>" 
     . $compteurInfo;

?>