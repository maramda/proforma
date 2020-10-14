<?php 

 require_once('../Model/connexion_db.php');

if (isset($_POST['nomm'])  && isset($_POST['login'])  && isset($_POST['password'])  
	&& isset($_POST['mail_u']) && isset($_POST['type_u']) )
{

	$nomm = $_POST['nomm'];
	$login = $_POST['login'];
	
	$password = $_POST['password'];
	$mail_u = $_POST['mail_u'];
    $type_u = $_POST['type_u'];
    
	$sql = "INSERT INTO utilisateur (nom, login, password, mail, type) VALUES ('$nomm','$login','$password','$mail_u','$type_u')";
	$connexion->query($sql); 

}


header("location: Inscription.php");