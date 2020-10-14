<?php
class Formation{
private $code;
private $titre;
private $duree;


                

function __construct($code,$titre,$duree){
$this->code = $code;
$this->titre = $titre;
$this->duree = addslashes($duree);




}

public function ajouter(){ 

  include('../includes/connect_db.php');





  
      
    
      $req = $bdd->exec ("INSERT INTO `formation`(`code`, `titre`, `duree`) VALUES ('$this->code','$this->titre','$this->duree')");
      
      echo'oui';
                  //return TRUE;
  
  }


    public function modifier(){ 

    include('../includes/connect_db.php');

    $id=$_GET['id'];
        
    $req=$bdd->exec("UPDATE `formation` SET  `code`='$this->code',`titre`='$this->titre',`duree`='$this->duree' WHERE id=$id");
    
    
    echo'oui';
    //return TRUE;
 			}



public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM `formation` WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}
        
}

//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['titre'],$_POST['lien'],$_POST['pass'],$_POST['type']);


?>