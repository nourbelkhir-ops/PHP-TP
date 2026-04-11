<?php
$message = "";

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);
    $email = trim($_POST["email"]);
    $ville = trim($_POST["ville"]);

    // ✅ Vérification des champs
    if (empty($nom) || empty($prenom) || empty($email) || empty($ville)) {
        $message = "Tous les champs sont obligatoires.";
    }
    // ✅ Validation email
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Email invalide.";
    }
    else {
        // ✅ Préparer les données
        $date = date("Y-m-d H:i:s");
        $ligne = "$nom;$prenom;$email;$ville;$date\n";

        // ✅ Enregistrer dans le fichier
        file_put_contents("contacts.csv", $ligne, FILE_APPEND);

        $message = "Contact enregistré avec succès !";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestion des contacts</title>
</head>
<body>

<h2>Formulaire de contact</h2>

<p style="color:red;"><?php echo $message; ?></p>

<form method="POST">
    Nom: <input type="text" name="nom"><br><br>
    Prénom: <input type="text" name="prenom"><br><br>
    Email: <input type="text" name="email"><br><br>

    Ville:
    <select name="ville">
        <option value="">--Choisir--</option>
        <option value="Paris">Paris</option>
        <option value="Lyon">Lyon</option>
        <option value="Tunis">Tunis</option>
    </select><br><br>

    <button type="submit">Enregistrer</button>
</form>

<hr>

<h2>Liste des contacts</h2>

<?php
// ✅ Vérifier si le fichier existe et n'est pas vide
if (file_exists("contacts.csv") && filesize("contacts.csv") > 0) {

    $fichier = fopen("contacts.csv", "r");

    echo "<table border='1'>";
    echo "<tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Ville</th>
            <th>Date</th>
          </tr>";

    // Lire ligne par ligne
    while (($ligne = fgets($fichier)) !== false) {
        $data = explode(";", trim($ligne));

        echo "<tr>";
        foreach ($data as $champ) {
            echo "<td>$champ</td>";
        }
        echo "</tr>";
    }

    echo "</table>";

    fclose($fichier);

} else {
    // ✅ Si fichier vide ou inexistant
    echo "<p>Aucun contact enregistré pour le moment.</p>";
}
?>

</body>
</html>