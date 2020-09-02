<?php
require_once('../Model/actualite.class.php');
$actualite = new Actualite($_POST['titre'],$_POST['description'],$_POST['lien']);
$actualite->ajouter();

header("location:../listeactualite.php?resultat=oui");
//exit();
?>