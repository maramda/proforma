<?php
class Coordonees{
private $tel;
private $fax;
private $fixe;
private $email;
private $adresse;
private $code_postal;

                

function __construct($tel,$fax,$fixe,$email,$adresse,$code_postal){
$this->tel = $tel;
$this->fax = $fax;
$this->fixe = $fixe;
$this->email = $email;
$this->adresse = $adresse;
$this->code_postal = $code_postal;




}

public function ajouter(){ 

  require_once('../Modele/connexion_db.php');





  
      
    
      $req = $bdd->exec ("INSERT INTO `info`(`tel`, `fax`, `fixe`, `email`, `adresse`, `code_postal`) VALUES ('$this->tel','$this->fax','$this->fixe','$this->email','$this->adresse','$this->code_postal')");
      
      echo'oui';
                  //return TRUE;
  
  }


    public function modifier(){ 

    include('../includes/connect_db.php');

    $id=$_GET['id'];
        
    $req=$bdd->exec("UPDATE `info` SET  `tel`='$this->tel',`fax`='$this->fax',`fixe`='$this->fixe',`email`='$this->email',`adresse`='$this->adresse',`code_postal`='$this->code_postal' WHERE id=$id");
    
    
    echo'oui';
    //return TRUE;
 			}



public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM `info` WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}
        
}

//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['titre'],$_POST['lien'],$_POST['pass'],$_POST['type']);


?>