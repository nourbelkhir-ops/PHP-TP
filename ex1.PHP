<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercice 1</title>
</head>
<body>

    <p style="text-align:center; font-weight:bold;">
        Bienvenue en PHP
    </p>

<?php
    // 2) Déclaration de la variable
    $nom = " Mohamed Koutheir Ben Ghazi ";

    echo "<h3>Chaîne originale :</h3>";
    echo $nom . "<br><br>";

    // Suppression des espaces inutiles
    $nom_sans_espace = trim($nom);

    echo "<h3>Chaîne après trim() :</h3>";
    echo $nom_sans_espace . "<br><br>";

    // Affichage en majuscules
    echo "<h3>En majuscules :</h3>";
    echo strtoupper($nom_sans_espace) . "<br><br>";

    // Affichage en minuscules
    echo "<h3>En minuscules :</h3>";
    echo strtolower($nom_sans_espace) . "<br><br>";
?>

</body>
</html>
=======
<?php

// Création du tableau
$panier = ["Pomme", "Banane", "Cerise"];
echo "Tableau initial : <br>";
print_r($panier);
echo "<br><br>";

// Ajouter "Orange" à la fin
array_push($panier, "Orange");
echo "Après ajout de Orange à la fin : <br>";
print_r($panier);
echo "<br><br>";

// Ajouter "Fraise" au début
array_unshift($panier, "Fraise");
echo "Après ajout de Fraise au début : <br>";
print_r($panier);
echo "<br><br>";

// Supprimer le dernier élément
array_pop($panier);
echo "Après suppression du dernier élément : <br>";
print_r($panier);
echo "<br><br>";

// Trier selon l’ordre alphabétique inverse
rsort($panier);
echo "Après tri alphabétique inverse : <br>";
print_r($panier);
echo "<br><br>";

?>
<?php

$notes = [12, 18, 5, 14, 20, 9, 11];

// Calculer la somme totale
$somme = array_sum($notes);
echo "Somme totale : " . $somme . "<br>";

// Calculer la moyenne
$moyenne = $somme / count($notes);
echo "Moyenne : " . $moyenne . "<br>";

// Nombre de notes
$nombre = count($notes);
echo "Nombre de notes : " . $nombre . "<br>";

// Trier les notes de la plus petite à la plus grande
sort($notes);
echo "Notes triées (ordre croissant) : <br>";
print_r($notes);

?>
>>>>>>> 9023fe2 (Second upload)
