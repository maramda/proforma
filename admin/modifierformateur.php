<?php 
require_once('../Modele/connexion_db.php');
session_start();


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

$requestInsert=$connexion->query("UPDATE formateur
        set id='$id',
        adresse='$adresse_f',tel='$tel_f',email='$mail_f',cv='$cv_f'
  where id = '$id'");

  if (!$requestInsert) echo "error !";
  header("location: compte.php");

	

}


header("location: compte.php");

?>


<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.min.js"></script> 
<script type="text/javascript" src="script.js"></script>
