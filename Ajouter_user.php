
<?php 

 require_once('../Modele/connexion_db.php');

if (isset($_POST['nomm'])  && isset($_POST['login'])  && isset($_POST['password'])  
	&& isset($_POST['mail_u']) && isset($_POST['type']) )
{

	$nomm = $_POST['nomm'];
	$login = $_POST['login'];
	
	$password = $_POST['password'];
	$mail_u = $_POST['mail_u'];
    $type = $_POST['type'];
    
	$sql = "INSERT INTO utilisateur(nom, login, password, mail, type) VALUES ('$nomm','$login','$password','$mail_u','$type')";
	$connexion->query($sql); 

}


header("location: Inscription.php");

?>