
<?php 

require_once('../Model/connexion_db.php');

if (isset($_POST['nomm']) && isset($_POST['prenom_u'])  && isset($_POST['nom_u'])  && isset($_POST['mdp'])  
	&& isset($_POST['mail_u']) && isset($_POST['type']))
{

	$nomm = $_POST['nomm'];
	$prenom_u = $_POST['prenom_u'];
	$nom_u = $_POST['nom_u'];
	$mdp = $_POST['mdp'];
	$mail_u = $_POST['mail_u'];
	$type = $_POST['type'];
	$sql = "INSERT INTO utilisateur(nom, prenom, nom_utilisateur, mdp, mail, type) VALUES ('$nomm','$prenom_u','$nom_u','$mdp','$mail_u','$type')";
	$connexion->query($sql); 

}


header("location: Inscription.php");

?>