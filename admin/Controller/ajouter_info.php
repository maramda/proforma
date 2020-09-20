<?php
require_once('../Model/Adresse.class.php');
$actualite = new Actualite($_POST['tel'],$_POST['fax'],$_POST['fixe'],$_POST['email'],$_POST['adresse'],$_POST['code_postal']);
$actualite->ajouter();

header("location:../listeinfo.php?resultat=oui");
//exit();
?>