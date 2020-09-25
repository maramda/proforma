<?php
class Contact{
private $nom;   
private $email;
private $tel;   
private $msg;


                

function __construct($nom,$email,$tel,$msg){
$this->nom = $nom;
$this->email = $email;
$this->tel = $tel;
$this->msg = addslashes($msg);



}


public function ajouter(){ 

include('../includes/connect.php');
    
	
		$req = $bdd->exec ("INSERT INTO `contact`(`nom`, `email`, `tel` , `msg`) 
        VALUES ('$this->nom','$this->email','$this->tel','$this->msg')");
		
		echo'oui';
                //return TRUE;

}



}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>