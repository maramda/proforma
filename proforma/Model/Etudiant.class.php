<?php
class Etudiant{
private $nom;   
private $prenom;
private $tel;
private $date_nas;
private $lieunas;   
private $region;
private $adresse;
private $niveaudetude;
private $email;
private $sexe;
                

function __construct($nom,$prenom,$tel,$date_nas,$lieunas,$region,$adresse,$niveaudetude,$email,$sexe){
$this->nom = $nom;
$this->prenom = $prenom;
$this->tel = $tel;
$this->date_nas = $date_nas;
$this->lieunas = $lieunas;
$this->region = $region;
$this->adresse = $adresse;
$this->niveaudetude = $niveaudetude;
$this->email = $email;
$this->sexe = $sexe;

}


public function ajouter(){ 

include('../includes/connect.php');
    
	
		$req = $bdd->exec ("INSERT INTO etudiant(
            'nom',
            'prenom', 
            'tel' , 
            'date_nas',
            'lieunas', 
            'region', 
            'adresse' , 
            'niveaudetude', 
            'email' , 
            'sexe') 
        VALUES ('$this->nom',
                '$this->prenom',
                '$this->tel',
                '$this->date_nas',
                '$this->lieunas',
                '$this->region',
                '$this->adresse',
                '$this->niveaudetude',
                '$this->email',
                '$this->sexe'
        )");
		
		echo'oui';
                //return TRUE;

}



}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['prenom'],$_POST['pass'],$_POST['type']);


?>