<?php
include ('server.php' );

/* Fonction pour changer de photo de profil(pas opérationnelle)
function photo_profil($user,$Photo_profil){
// Vérifier si le formulaire a été soumis
if(isset($_POST['submit'])) {
    // Vérifier si un fichier a été sélectionné
    if(isset($_FILES['profile_photo'])) {
        $file = $_FILES['profile_photo'];

        $repertoire_photos = "profile_photos/";

// Vérifier si le répertoire existe, sinon le créer
if (!is_dir($repertoire_photos) && !mkdir($repertoire_photos, 0777, true)) {
    die('Erreur : Impossible de créer le répertoire profile_photos/');
}
        // Dossier de destination pour les photos de profil
        $targetDir = "profile_photos/";
        $targetFile = $targetDir . basename($file['name']);

        // Vérifier le type de fichier
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowedTypes = array("jpg", "jpeg", "png", "gif");

        if(in_array($imageFileType, $allowedTypes)) {
            // Déplacer le fichier téléchargé vers le dossier de destination
            if(move_uploaded_file($file['tmp_name'], $targetFile)) {
                echo "Le fichier a été téléchargé avec succès.";

                // Enregistrer le chemin de la photo de profil dans la base de données
                $Photo_profilPath = $targetFile;
                // Ici, vous devez insérer le chemin dans la base de données pour l'utilisateur actuel
                // Vous devez également récupérer cet URL pour afficher la photo de profil plus tard
            } else {
                echo "Une erreur s'est produite lors du téléchargement du fichier.";
            }
        } else {
            echo "Seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés.";
        }
    } else {
        echo "Veuillez sélectionner un fichier.";
    }
}
}*/


?>
