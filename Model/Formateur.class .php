<?php 
class Formateur {

    private $nom;
    private $prenom;
    private $adresse;
    private $tel;
    private $email;
    private $cin;
    private $cv;
   






    function __construct($nom,$prenom,$adresse,$tel,$email,$cin,$cv){
$this->nom = $nom;
$this->prenom = $prenom;
$this->adresse = $adresse ;
$this->tel= $tel;
$this->email = $email;
$this->cin= $cin;
$this->cv = $cv;

    }


public function ajouter(){

    include('../includes/connect.php');

    $req = $bdd->exec ("INSERT INTO `formateur`('nom,prenom,adresse,tel,email,cin,cv') 
    values ('$this->nom,$this->prenom,$this->adresse,$this->tel,$this->email,$this->cin,$this->cv')");
echo'oui';
}






}

?>