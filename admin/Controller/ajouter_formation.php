<?php
require_once('../Model/formation.class.php');
$formation = new Formation($_POST['code'],$_POST['titre'],$_POST['duree']);
$formation->ajouter();

header("location:../listeformation.php?resultat=oui");
//exit();
?>