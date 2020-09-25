<?php 
class Entreprise {

    private $nom;
    private $responsable;
    private $tel;
    private $code_fiscale;
    private $code_postal;
    private $adresse;
    private $fax;
    private $email;
    private $siteweb;






    function __construct($nom,$responsable,$tel,$code_fiscale,$code_postal,$adresse,$fax,$email,$siteweb){
$this->nom = $nom;
$this->responsable = $responsable;
$this->tel = $tel;
$this->code_fiscale = $code_fiscale ;
$this->code_postal= $code_postal;
$this->adresse= $code_postal;
$this->fax= $fax;
$this->email = $email;
$this->siteweb = $siteweb;

    }


public function ajouter(){

    include('../includes/connect.php');

    $req = $bdd->exec ("INSERT INTO `entreprise`('nom','responsable','tel','code_fiscale','code_postal','fax','email','siteweb') 
    values ('$this->nom,$this->responsable,$this->tel,$this->code_fiscale,$this->code_postal,$this->fax,$this->email,$this->siteweb')");
echo'oui';
}






}

?>