<?php
require_once('../Model/Demande.class.php');
$demandeformation = new Demande(
    $_POST['theme'],
    $_POST['date'],
    $_POST['code']);
   
   
$demandeformation->ajouter();

header("location:../acceuil.php?resultat=oui");
//exit();
?>