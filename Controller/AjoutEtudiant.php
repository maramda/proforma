<?php
require_once('../Model/Etudiant.class.php');
$etudiant = new Etudiant(
    $_POST['nom'],
    $_POST['prenom'],
    $_POST['tel'],
    $_POST['date_nas'],
    $_POST['lieunas'],
    $_POST['region'],
    $_POST['adresse'],
    $_POST['niveaudetude'],
    $_POST['email'],
    $_POST['sexe']);
$etudiant->ajouter();

header("location:../index.php?resultat=oui");
//exit();
?>