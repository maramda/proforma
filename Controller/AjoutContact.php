<?php
require_once('../Model/Contact.class.php');
$contact = new Contact($_POST['nom'],$_POST['email'],$_POST['tel'],$_POST['msg']);
$contact->ajouter();
echo 
header("location:../index.php?resultat=oui");
//exit();
?>