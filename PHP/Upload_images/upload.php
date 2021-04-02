<?php

if (isset($_FILES['image'])) {
    $dossier = 'images/';
    $fichier = basename($_FILES['image']['name']);
    $extensions = array('.png', '.jpg', '.jpeg');
    $extension = strrchr($_FILES['image']['name'], '.');
    $taille_max = 5000000;
    $taille = filesize($_FILES['image']['tmp_name']);
    $fichier = strtr($fichier, 'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
    $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
    $erreurs = array();

    if ($taille > $taille_max) {
        array_push($erreurs, 'Le fichier est trop volumineux !');
    }

    if (!in_array($extension, $extensions)) {
        array_push($erreurs, 'Le fichier doit être de type png, jpg ou jpeg !');
    }

    if (empty($erreurs)) {

        if (move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier)) {
            echo 'Upload effectué avec succès !';
            echo '<br>';
        } else {
            echo "Echec de l'upload !";
        }
    } else {
        print_r($erreurs);
    }

}