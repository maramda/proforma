<?php
require_once('../Model/Entreprise.class.php');
$entreprise = new Entreprise($_POST['nom'],$_POST['responsable'],$_POST['tel'],$_POST['code_fiscale'],
$_POST['code_postal'],$_POST['adresse'],$_POST['fax'],$_POST['email'],$_POST['siteweb']);
$entreprise->ajouter();

header("location:../index.php?resultat=oui");
//exit();
?>