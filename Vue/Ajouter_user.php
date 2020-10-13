
<?php 

 require_once('../Modele/connexion_db.php');

if (isset($_POST['nomm'])  && isset($_POST['login_u'])  && isset($_POST['password_u'])  
	&& isset($_POST['mail_u']) && isset($_POST['type_u']) )
{

	$nomm = $_POST['nomm'];
	$login_u = $_POST['login_u'];
	
	$password_u = $_POST['password_u'];
	$mail_u = $_POST['mail_u'];
    $type_u = $_POST['type_u'];
    
	$sql = "INSERT INTO utilisateur(nom, login, password, mail, type) VALUES ('$nomm','$login_u','$password_u','$mail_u','$type_u')";
	$connexion->query($sql); 

}


header("location: Inscription.php");

?>