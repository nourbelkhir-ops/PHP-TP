<?php

// Création du tableau initial
$panier = ["Pomme", "Banane", "Cerise"];
echo "Tableau initial :<br>";
print_r($panier);
echo "<br><br>";

// Ajouter "Orange" à la fin
array_push($panier, "Orange");
echo "Après ajout de Orange à la fin :<br>";
print_r($panier);
echo "<br><br>";

// Ajouter "Fraise" au début
array_unshift($panier, "Fraise");
echo "Après ajout de Fraise au début :<br>";
print_r($panier);
echo "<br><br>";

// Supprimer le dernier élément
array_pop($panier);
echo "Après suppression du dernier élément :<br>";
print_r($panier);
echo "<br><br>";

// Trier en ordre alphabétique inverse
rsort($panier);
echo "Après tri alphabétique inverse :<br>";
print_r($panier);
echo "<br><br>";

?>
<?php

$notes = [12, 18, 5, 14, 20, 9, 11];

// Calcul de la somme totale
$somme = array_sum($notes);
echo "Somme totale des notes : $somme<br>";

// Calcul de la moyenne
$moyenne = $somme / count($notes);
echo "Moyenne de la classe : $moyenne<br>";

// Nombre de notes
$nombre = count($notes);
echo "Nombre de notes : $nombre<br>";

// Trier les notes de la plus petite à la plus grande
sort($notes);
echo "Notes triées en ordre croissant :<br>";
print_r($notes);

?>