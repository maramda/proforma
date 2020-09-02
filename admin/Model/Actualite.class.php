<?php
class Actualite{
private $titre;
private $description;
private $lien;


                

function __construct($titre,$description,$lien){
$this->titre = $titre;
$this->description = $description;
$this->lien = addslashes($lien);




}

public function ajouter(){ 

  include('../includes/connect_db.php');





  
      
    
      $req = $bdd->exec ("INSERT INTO `actualite`(`titre`, `description`, `lien`) VALUES ('$this->titre','$this->description','$this->lien')");
      
      echo'oui';
                  //return TRUE;
  
  }


    public function modifier(){ 

    include('../includes/connect_db.php');

    $id=$_GET['id'];
        
    $req=$bdd->exec("UPDATE `actualite` SET  `titre`='$this->titre',`description`='$this->description',`lien`='$this->lien' WHERE id=$id");
    
    
    echo'oui';
    //return TRUE;
 			}



public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM `actualite` WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}
        
}

//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['titre'],$_POST['lien'],$_POST['pass'],$_POST['type']);


?>