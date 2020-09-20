<?php
class Contact{
private $name;   
private $email;
private $tel;   
private $msg;


                

function __construct($name,$email,$tel,$msg){
$this->name = $name;
$this->email = $email;
$this->tel = $tel;
$this->msg = addslashes($msg);



}


public function ajouter(){ 

include('../includes/connect.php');
    
	
		$req = $bdd->exec ("INSERT INTO `contact`(`name`, `email`, `tel` , 'msg') 
        VALUES ('$this->name','$this->email','$this->tel','$this->msg')");
		
		echo'oui';
                //return TRUE;

}



}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>