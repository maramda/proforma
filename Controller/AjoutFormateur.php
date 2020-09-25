<?php
require_once('../Model/Formateur.class.php');
$entreprise = new Formateur(
    $_POST['nom'],
    $_POST['prenom'],
    $_POST['adresse'],
    $_POST['tel'],
    $_POST['email'],
    $_POST['cin'],
    $_POST['cv']);
    
$entreprise->ajouter();

header("location:../index.php?resultat=oui");
//exit();
?>