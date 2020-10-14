<?php
require_once('../Model/Info.class.php');
$info = new Info($_POST['tel'],$_POST['fax'],$_POST['fixe'],$_POST['email'],$_POST['adresse'],$_POST['code_postal']);
$info->ajouter();

header("location:../listeinfo.php?resultat=oui");
//exit();
?>