<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET</title>
</head>
<body>

<h2>Envoi de formulaire avec GET</h2>

<form method="GET">
    Nom : <input type="text" name="nom"><br><br>
    Prénom : <input type="text" name="prenom"><br><br>
    Email : <input type="email" name="email"><br><br>

    Votre opinion :
    <select name="opinion">
        <option value="is great">I like your site</option>
        <option value="is OK">Your Site is OK</option>
        <option value="is horrible">Your Site is horrible</option>
    </select><br><br>

    <input type="submit" value="Envoyer">
    <input type="reset" value="Rétablir">
</form>

<hr>

<?php
// Vérifier si le formulaire est soumis
if (isset($_GET['nom'], $_GET['prenom'], $_GET['email'], $_GET['opinion'])) {

    // Sécurisation
    $nom = htmlspecialchars($_GET['nom']);
    $prenom = htmlspecialchars($_GET['prenom']);
    $email = htmlspecialchars($_GET['email']);
    $opinion = htmlspecialchars($_GET['opinion']);

    echo "<h3>Récapitulatif des informations saisies :</h3>";
    echo "<ul>";
    echo "<li>Nom : $nom</li>";
    echo "<li>Prénom : $prenom</li>";
    echo "<li>Email : $email</li>";
    echo "<li>Opinion : $opinion</li>";
    echo "</ul>";
}
?>

</body>
</html>