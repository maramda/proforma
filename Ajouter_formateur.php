<?php 

require_once('./Model/connexion_db.php');

if (isset($_POST['nom_f']) && isset($_POST['prenom_f'])  && isset($_POST['adresse_f'])  && isset($_POST['tel_f'])  
	&& isset($_POST['mail_f']) && isset($_POST['cin_f']) && isset($_POST['cv_f']))
{

	$nom_f = $_POST['nom_f'];
	$prenom_f = $_POST['prenom_f'];
	$adresse_f = $_POST['adresse_f'];
	$tel_f = $_POST['tel_f'];
    $mail_f = $_POST['mail_f'];
    $cin_f = $_POST['cin_f'];
	$cv_f = $_POST['cv_f'];
	$sql = "INSERT INTO formateur(nom, prenom, adresse, tel, email, cin, cv) VALUES ('$nom_f','$prenom_f','$adresse_f','$tel_f','$mail_f','$cin_f','$cv_f')";
	$connexion->query($sql); 

}


header("location: acceuil.php");

?>