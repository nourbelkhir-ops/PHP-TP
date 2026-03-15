<?php

// Fonction de nettoyage
function securiserTexte($texte)
{
    $texte = trim($texte);
    $texte = htmlspecialchars($texte);
    return $texte;
}

// Fonction de calcul
function appliquerRemise($prixInitial, $pourcentage = 0)
{
    $prixFinal = $prixInitial - ($prixInitial * $pourcentage / 100);
    return $prixFinal;
}

$resultat = "";

if(isset($_POST["calculer"]))
{
    $nom = securiserTexte($_POST["nom"]);
    $prix = $_POST["prix"];
    $remise = $_POST["remise"];

    $prixFinal = appliquerRemise($prix, $remise);

    $resultat = "Le produit $nom coûte désormais $prixFinal €";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Panier Promo</title>
</head>

<body>

<h2>Calculer une Promotion</h2>

<form method="post">

<label>Nom du produit</label><br>
<input type="text" name="nom"><br><br>

<label>Prix (€)</label><br>
<input type="number" name="prix"><br><br>

<label>Remise (%)</label><br>
<input type="number" name="remise"><br><br>

<button type="submit" name="calculer">Calculer</button>
<button type="reset">Annuler</button>

</form>

<br>

<?php
echo $resultat;
?>

</body>
</html>