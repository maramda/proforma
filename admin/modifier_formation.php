<?php 
require_once('../Modele/connexion_db.php');
session_start();

if (isset($_POST['forma']) and isset($_POST['type_form'])  and isset($_POST['prix'])  )
{

	$type_form = $_POST['type_form'];
	 $sql = $connexion->query("SELECT id FROM type_formation WHERE designation ='$type_form'");
    $result = $sql->fetch(); 
    $id_type_form = $result['id'];
    $designation = $_POST['forma'];
    $sql = $connexion->query("SELECT id FROM formation WHERE designation ='$designation'");
    $result = $sql->fetch(); 
    $id = $result['id'];

	$prix = $_POST['prix'];


$requestInsert=$connexion->query("UPDATE formation
        set id_type_form='$id_type_form',
        designation='$designation',prix='$prix'
  where id = '$id'");

  if (!$requestInsert) echo "error !";
  header("location: Gestion_formation.php");

	

}


header("location: Gestion_formation.php");

?>


<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.min.js"></script> 
<script type="text/javascript" src="script.js"></script>
