<?php  require_once(__DIR__. '/functions.php');
require_once(__DIR__. '/header.php');
include ('server.php' )
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="idee.css">
    <title>Idées</title>
</head>
<body class="body">

<div class="body-content"><div class="card">
<h2>Ajouter une idée</h2>

    <form action="idee.php" method="post" enctype="multipart/form-data" class="form">

        <select name="categorie" id="categorie">
            <?php
            // Connexion à la base de données
            $connexion = new mysqli('localhost', 'root', '', 'Idea');

            // Vérifier la connexion
            if ($connexion->connect_error) {
                die("La connexion à la base de données a échoué : " . $connexion->connect_error);
            }

            // Requête pour récupérer les catégories depuis la base de données
            $requete = "SELECT Id, Nom FROM categories";
            $resultat = $connexion->query($requete);

           if ($resultat) {
    if ($resultat->num_rows > 0) {
        // Parcourir les résultats et afficher chaque catégorie comme une option dans le menu déroulant
        while ($row = $resultat->fetch_assoc()) {
            echo "<option value='" . $row['Id'] . "'>" . $row['Nom'] . "</option>";
        }
    } else {
        echo "<option>Aucune catégorie disponible</option>";
    }
} else {
    echo "Erreur lors de l'exécution de la requête : " . $connexion->error;
}
            // Fermer la connexion à la base de données
            $connexion->close();
            ?>
        </select>
        <br>

    <label for="Prenom">Votre idée :</label>
        <input type="text" id="Libelle" name="Libelle" required><br>
        
        <button type="submit" name="submit">Enregistrer</button>
        </form>
    </div>
</div>
</body>
</html>