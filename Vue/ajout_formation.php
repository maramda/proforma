
<?php 

require_once('../Modele/connexion_db.php');
session_start();

// Ajout d'une nouvelle formation 
if (isset($_POST['liste_form']) and isset($_POST['forma']) and 
	isset($_POST['prix'])  )
{

	$id_type_form = $_POST['liste_form'];
	$designation = $_POST['forma'];
	$prix = $_POST['prix'];

	
	$sql = "INSERT INTO formation(id_type_form,designation,prix) 
	VALUES ('$id_type_form','$designation','$prix')";
	$connexion->query($sql); 

}


// Ajout d'un nouveau type de formation 
if (isset($_POST['type_form']) and isset($_POST['forma2']) and 
	isset($_POST['prix2'])  )
{
  
  //Ajout du type de foramtion
   $type_form = $_POST['type_form'];

   $sql = "INSERT INTO type_formation(designation) 
	VALUES ('$type_form')";
	$connexion->query($sql);

 //Ajout de la formation 
    $sql = $connexion->query("SELECT MAX(id) as identifier from type_formation");
    $result = $sql->fetch();  
  
    $id_type_form =  $result['identifier'] ;
	$designation = $_POST['forma2'];
	$prix = $_POST['prix2'];
	
	
	$sql = "INSERT INTO formation(id_type_form,designation,prix) 
	VALUES ('$id_type_form','$designation','$prix')";
	$connexion->query($sql);  

}



header("location: Gestion_formation.php");

?>