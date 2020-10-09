
<?php 

 require_once('../Modele/connexion_db.php');

if (isset($_POST['nom']) && isset($_POST['username'])  && isset($_POST['type'])  && isset($_POST['formation'])  
	&& isset($_POST['formateur']) && isset($_POST['pres'])  )
{

	$nom = $_POST['nom'];
	$username = $_POST['username'];
	$type = $_POST['type'];
	$formation = $_POST['formation'];
	$formateur = $_POST['formateur'];
	$pres = $_POST['pres'];
	$sql = "INSERT INTO pres(nom, username, type ,formation ,formateur) VALUES ('$nom','$username','$type','$formation','$formateur')";
	$connexion->query($sql); 

}


header("location: ajouterpres.php");

?>