
<?php

require_once('../Model/connexion_db.php');
session_start();

$nom = $_POST['nom'] ;
$motdepasse= $_POST['mdp'];

$sql = $connexion->query("SELECT * from utilisateur WHERE nom_utilisateur = '$nom' and mdp = '$motdepasse'");

if($result = $sql->fetch() and $result['nom_utilisateur'] == $nom and $result['mdp'] == $motdepasse ) {
    session_start();
    $_SESSION["username"]= $_POST['nom'] ;
    $_SESSION["motdepasse"]= $_POST['mdp'];


if ($nom == 'admin' && $motdepasse == 'admin')
    {
       header("location: ../partieclient/acceuil.php");
    }
	else
	{
       header("location:../partieclient/acceuil.php");
   }
}

else
{ 
 header("location: Inscription.php");

}
  







?>