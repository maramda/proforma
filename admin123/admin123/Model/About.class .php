<?php
class About{

private $titre;
private $description;


                

function __construct($titre,$description){

$this->titre = $titre;
$this->description = addslashes($description);




}

public function ajouter(){ 

  include('../includes/connect_db.php');
      
    
      $req = $bdd->exec ("INSERT INTO `quisommenous`(`titre`, `description`) VALUES ('$this->titre','$this->description')");
      
      echo'oui';
                  //return TRUE;
  
  }


    public function modifier(){ 

    include('../includes/connect_db.php');

    $id=$_GET['id'];
        
    $req=$bdd->exec("UPDATE `quisommenous` SET  `titre`='$this->titre',`description`='$this->description' WHERE id=$id");
    
    
    echo'oui';
    //return TRUE;
 			}



public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM quisommenous WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}
        
}

//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>