<?php 
require_once('../Modele/connexion_db.php');
session_start();


if (isset($_POST['nom_f'])  && isset($_POST['adresse_f'])  && isset($_POST['tel_f'])  
	&& isset($_POST['mail_f']) 
{

	$nom_f = $_POST['nom_f'];
	
	$adresse_f = $_POST['adresse_f'];
	$tel_f = $_POST['tel_f'];
    $mail_f = $_POST['mail_f'];
    $cin_f = $_POST['cin_f'];
	

$requestInsert=$connexion->query("UPDATE utilisateur
        set id='$id',
        adresse='$adresse_f',tel='$tel_f',email='$mail_f'
  where id = '$id'");

  if (!$requestInsert) echo "error !";
  header("location: compte.php");

	

}


header("location: compte.php");

?>


<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.min.js"></script> 
<script type="text/javascript" src="script.js"></script>
