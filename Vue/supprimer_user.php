
<?php 

require_once('../Modele/connexion_db.php');

$id = $_POST['id_user'];

$result=$connexion->query("DELETE from utilisateur WHERE id='$id'");
 
 if ($result) {
 	header("location: acceuil.php");
 }
 else{
 	echo "error";
 }

?>